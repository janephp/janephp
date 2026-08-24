# Contributing to Jane

First of all, thank you for your interest in contributing to Jane! 🎉

Jane is a community-driven project, and we welcome pull requests, bug reports, and feature requests. Whether you want to fix a typo, add a new feature to the OpenAPI generator, or improve performance, your help is appreciated.

To help you get started, we have split the contribution guide into several specific topics.

---

## ⚠️ Backward Compatibility

Because Jane is widely used, we try to avoid breaking changes as much as possible. If your contribution involves modifying the public API or the structure of the generated code, please read this first.

* **[Breaking Changes Policy](breaking_changes.md)**
  *What constitutes a breaking change and how to handle deprecations.*

## 🧪 Quality & Testing

We cannot merge pull requests without proper testing. Since Jane generates code, testing often involves generating a client/model on the fly and asserting its behavior.

* **[Running & Writing Tests](tests.md)**
  *How to setup the test suite, run unit/functional tests, and debug the generated code.*

## 🧠 Understanding the Core

Jane is not a standard library; it is a **code generator**. This means the logic can be quite abstract (generating PHP code strings, handling ASTs, etc.).

If you are new to the codebase, we highly recommend starting here to understand the lifecycle of the generation process:

* **[Architecture & Internals](internals.md)**
  *Learn about the Loader, Schema, Generator, and Printer workflow.*

## 📐 Architecture Decisions

Some behaviors of the generators are the result of deliberate, sometimes
hard-won decisions. They are recorded so future contributors can understand
*why* the code is shaped this way before touching it:

* **[Architecture Decision Records](adrs/index.md)**
  *Why generated payloads use `JsonObject`, how pre-generation schema validation works, and more.*
