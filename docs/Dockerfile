FROM python:3-slim

WORKDIR /app/

# git is needed by mike, to deploy the versions of the documentation
RUN apt-get update \
    && apt-get install -y --no-install-recommends git \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# mike: Zensical-compatible fork, until Zensical ships native versioning
RUN pip install \
    zensical \
    markdown-callouts \
    git+https://github.com/squidfunk/mike.git

CMD ["zensical", "serve"]
