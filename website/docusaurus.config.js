module.exports = {
  title: '🌱 JanePHP',
  tagline: 'Set of tools to generate Models & API Clients based on JsonSchema / OpenAPI specs',
  url: 'https://your-docusaurus-test-site.com',
  baseUrl: '/',
  favicon: 'img/favicon.ico',
  organizationName: 'janephp',
  projectName: 'janephp',
  themeConfig: {
    navbar: {
      title: 'JanePHP',
      logo: {
        alt: 'My Site Logo',
        src: 'img/logo.svg',
      },
      links: [
        {to: 'docs/documentation/choose', label: 'Docs', position: 'left'},
        {to: 'blog', label: 'Blog', position: 'left'},
        {
          href: 'https://github.com/janephp/janephp',
          label: 'GitHub',
          position: 'right',
        },
      ],
    },
    footer: {
      style: 'dark',
      links: [
        {
          title: 'Documentation',
          items: [
            {
              label: 'Getting started',
              to: 'docs/documentation/choose',
            },
            {
              label: 'Usage with JSON Schema',
              to: 'docs/documentation/json_schema',
            },
            {
              label: 'Usage with OpenAPI',
              to: 'docs/documentation/open_api',
            },
          ],
        },
        {
          title: 'Guides',
          items: [
            {
              label: 'Elasticsearch models',
              to: 'docs/guides/elasticsearch_models',
            },
            {
              label: 'API Platform DTO',
              to: 'docs/guides/apiplatform_dto',
            },
            {
              label: 'External API Client',
              to: 'docs/guides/external_api_client',
            },
          ],
        },
        {
          title: 'Social',
          items: [
            {
              label: 'Blog',
              to: 'blog',
            },
            {
              label: 'GitHub',
              href: 'https://github.com/janephp/janephp',
            },
            {
              label: 'Sponsor',
              href: 'https://jolicode.com',
            },
          ],
        },
      ],
      copyright: `Copyright © ${new Date().getFullYear()} JanePHP`,
    },
  },
  presets: [
    [
      '@docusaurus/preset-classic',
      {
        docs: {
          sidebarPath: require.resolve('./sidebars.js'),
          editUrl:
            'https://github.com/janephp/janephp/edit/master/website/',
        },
        theme: {
          customCss: require.resolve('./src/css/custom.css'),
        },
      },
    ],
  ],
};
