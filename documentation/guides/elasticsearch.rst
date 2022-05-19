Elasticsearch models
====================

Here is a demo Symfony application of Jane with Elasticsearch integration.

You can find the fully working example on this repository: `janephp/demo-with-elasticsearch`_.

.. _`janephp/demo-with-elasticsearch`: https://github.com/janephp/demo-with-elasticsearch/

Indexer
-------

First, we need to index entities into Elasticsearch, to do that I made a command you can find in
``project/src/Command/IndexCommand.php``. Here is the same code, decomposed to explain each steps::

    // Here, $client is an instance of JoliCode\Elastically\Client, we use this library on top of Elastica to create
    // indexes, send documents, send requests and read results.
    // With that `getIndexBuilder` method, we get a class to build indexes.
    $indexBuilder = $client->getIndexBuilder();
    // We create an index called "beers" (with date suffix)
    $index = $indexBuilder->createIndex(self::BEERS_INDEX);
    // We update the "beers" alias with this new index
    $indexBuilder->markAsLive($index, self::BEERS_INDEX);

    // Class to index our documents
    $indexer = $client->getIndexer();

    // We fetch all beers from database
    $beers = $this->beerRepository->findAll();
    foreach ($beers as $beer) {
        // For each entity, we convert it to a Generated\Model\Beer DTO
        $model = $this->autoMapper->map($beer, \Generated\Model\Beer::class);
        // We put it in a Document in order to index it
        $document = new \Elastica\Document($beer->getId(), $model);
        // And we schedule the Document to "beers" index
        $indexer->scheduleIndex(self::BEERS_INDEX, $document);
    }

    // Flush all schedule documents & refresh "beers" index
    $indexer->flush();
    $indexer->refresh(self::BEERS_INDEX);

Controller
----------

Then you can see in ``project/src/Controller/BeerController.php`` file some interaction to show Elasticsearch results.
Same as before, decomposed code to explain each step::

    // With the `getIndex` method, we get a reference of the index we want (here I'm asking for 'beers' index)
    $index = $client->getIndex(self::BEERS_INDEX);
    // And we make a search query on the index (no arguments means we search for any result)
    $resultSet = $index->search();
    // We get the results for given $resultSet
    $results = $resultSet->getResults();

    $output = ['beers' => []];
    foreach ($results as $result) {
        // Then we get the model for each result
        // Here, thanks to Elastically and the Symfony serializer, the `getModel`
        // method will return a Generated\Model\Beer instance
        $output['beers'][] = $result->getModel();
    }

    return $this->json($output);
