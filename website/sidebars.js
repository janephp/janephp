/**
 * Copyright (c) 2017-present, Facebook, Inc.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

module.exports = {
  docs: {
    Documentation: [
      "documentation/choose",
      "documentation/json_schema",
      "documentation/open_api"
    ],
    Guides: [
      "guides/elasticsearch_models",
      "guides/apiplatform_dto",
      "guides/external_api_client",
      "guides/between_two_symfony_apps",
    ],
    Contributing: [
      "contributing/backwards_compatibility",
      "contributing/how_it_works",
      "contributing/tests"
    ],
    Components: [
      {
        type: "category",
        label: "JSON Schema",
        items: [
          "components/json_schema/introduction",
          "components/json_schema/specification",
          "components/json_schema/command",
          "components/json_schema/guessers",
          "components/json_schema/generators",
        ]
      },
      {
        type: "category",
        label: "OpenAPI 2",
        items: [
          "components/open_api_2/introduction",
          "components/open_api_2/specification",
          "components/open_api_2/command",
          "components/open_api_2/guessers",
          "components/open_api_2/generators",
        ]
      },
      {
        type: "category",
        label: "OpenAPI 3",
        items: [
          "components/open_api_3/introduction",
          "components/open_api_3/specification",
          "components/open_api_3/command",
          "components/open_api_3/guessers",
          "components/open_api_3/generators",
        ]
      }
    ]
  },
};
