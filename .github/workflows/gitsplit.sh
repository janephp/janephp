#!/bin/bash

declare -A repositories

repositories["https://${GH_TOKEN}@github.com/janephp/automapper.git"]="src/AutoMapper"
repositories["https://${GH_TOKEN}@github.com/janephp/json-schema.git"]="src/JsonSchema"
repositories["https://${GH_TOKEN}@github.com/janephp/json-schema-runtime.git"]="src/JsonSchemaRuntime"
repositories["https://${GH_TOKEN}@github.com/janephp/open-api-common.git"]="src/OpenApiCommon"
repositories["https://${GH_TOKEN}@github.com/janephp/open-api.git"]="src/OpenApi"
repositories["https://${GH_TOKEN}@github.com/janephp/open-api-2.git"]="src/OpenApi2"
repositories["https://${GH_TOKEN}@github.com/janephp/open-api-3.git"]="src/OpenApi3"
repositories["https://${GH_TOKEN}@github.com/janephp/open-api-runtime.git"]="src/OpenApiRuntime"
repositories["https://${GH_TOKEN}@github.com/janephp/documentation.git"]="documentation"

publish=""
for repository in "${!repositories[@]}"; do
    git subsplit init $repository
    publish="$repository:${repositories[$repository]} $publish"
done

git subsplit publish "$publish" --heads=master
