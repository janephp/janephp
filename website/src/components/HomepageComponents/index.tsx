import React from 'react';
import clsx from 'clsx';
import styles from './styles.module.css';

type ComponentItem = {
  title: string;
  Svg: React.ComponentType<React.ComponentProps<'svg'>>;
  description: JSX.Element;
};

const ComponentList: ComponentItem[] = [
  {
    title: 'JSON Schema',
    Svg: require('@site/static/img/logo/json_schema.svg').default,
    description: (
      <>
        Docusaurus was designed from the ground up to be easily installed and
        used to get your website up and running quickly.
      </>
    ),
  },
  {
    title: 'OpenAPI',
    Svg: require('@site/static/img/logo/openapi.svg').default,
    description: (
      <>
        Docusaurus lets you focus on your docs, and we&apos;ll do the chores. Go
        ahead and move your docs into the <code>docs</code> directory.
      </>
    ),
  },
  {
    title: 'AutoMapper',
    Svg: require('@site/static/img/logo/logo_jane_small.svg').default,
    description: (
      <>
        Extend or customize your website layout by reusing React. Docusaurus can
        be extended while reusing the same header and footer.
      </>
    ),
  },
];

function Component({title, Svg, description}: ComponentItem) {
  return (
    <div className={clsx('col col--4')}>
      <div className="text--center">
        <Svg className={styles.componentSvg} role="img" />
      </div>
      <div className="text--center padding-horiz--md">
        <h3>{title}</h3>
        <p>{description}</p>
      </div>
    </div>
  );
}

export default function HomepageComponents(): JSX.Element {
  return (
    <section className={styles.components}>
      <div className="container">
        <div className="row">
          {ComponentList.map((props, idx) => (
            <Component key={idx} {...props} />
          ))}
        </div>
      </div>
    </section>
  );
}
