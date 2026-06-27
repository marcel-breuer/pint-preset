# Repository Instructions

These instructions apply to every human or AI coding agent working in this repository, regardless of the tool, model, IDE, extension, CLI, automation platform, or execution environment.

## Scope and Priority

- This root `AGENTS.md` is the canonical source of project-wide instructions.
- Local `AGENTS.md` files MAY add directory-specific rules. The nearest applicable `AGENTS.md` takes precedence for local implementation details.
- Local rules and tool adapters MUST NOT weaken security, privacy, compliance, or reviewability requirements.
- Agent-specific files MUST be thin adapters that point back to this file, local `AGENTS.md` files, and `.agent/skills/`.

Apply instructions in this order:

1. Explicit task requirements and acceptance criteria.
2. Security, privacy, legal, and compliance requirements.
3. Nearest applicable local `AGENTS.md`.
4. This root `AGENTS.md`.
5. Existing architecture and established repository patterns.
6. Repository configuration.
7. Tests and technical documentation.
8. Official language and framework documentation.
9. Established community standards.
10. Explicitly documented assumptions.

Agents MUST NOT invent business requirements.

## Project Overview

- This repository is a Composer library package named `marcel-breuer/pint-preset`.
- It provides an opinionated Laravel Pint configuration preset for PHP and Laravel projects.
- Main language and data formats: PHP 8.1+, JSON, Markdown, YAML.
- Runtime package dependency: `laravel/pint`.
- Development test dependency: `phpunit/phpunit`.
- Source artifact: `src/pint.json`.
- Tests: `tests/PintPresetConfigTest.php` with PHPUnit configuration in `phpunit.xml`.
- CI/CD: GitHub Actions workflows create semantic version tags on `main` and update `CHANGELOG.md` on version tags.
- There is no Docker, database, API server, frontend application, infrastructure-as-code, or monorepo configuration in this repository.

## Source of Truth

Use this technical priority when deciding how to implement changes:

1. Existing implementation and established patterns.
2. Project configuration.
3. Tests.
4. Repository documentation.
5. Official PHP, Composer, PHPUnit, Laravel Pint, and GitHub Actions documentation.
6. Established standards.

Agents MUST NOT replace existing conventions with personal preferences without a concrete technical reason.

## Token Efficiency

- Read only files relevant to the current task.
- Prefer precise searches over broad file reads.
- Avoid repeatedly reading unchanged files.
- Do not restate the full task before starting.
- Do not repeat rules already defined here.
- Keep plans concise and limited to execution-critical steps.
- Do not narrate routine tool usage.
- Report only findings that affect implementation, validation, risk, or review.
- Prefer diffs and targeted edits over rewriting complete files.
- Avoid abstractions, documentation, comments, tests, or files that are not required.
- Do not include long code excerpts in final output when file references are sufficient.
- Do not duplicate the same information across summaries, findings, and completion reports.
- Token efficiency MUST NOT justify skipping required analysis, validation, security, or correctness checks.

Final output should normally contain only what changed, which files changed, validations executed, and unresolved issues, assumptions, or risks.

## PHP, JSON, and Package Standards

- PHP code MUST use `declare(strict_types=1);` where applicable.
- Public PHP interfaces and methods SHOULD use explicit parameter and return types.
- PHP tests SHOULD follow the existing PHPUnit style in `tests/PintPresetConfigTest.php`.
- JSON changes MUST preserve valid JSON and the existing indentation style.
- Changes to `src/pint.json` MUST preserve the top-level Laravel Pint `preset` and `rules` structure unless the task explicitly requires otherwise.
- Composer metadata changes MUST remain valid according to Composer schema expectations.
- GitHub Actions YAML changes MUST preserve existing indentation and should keep shell scripts strict with `set -euo pipefail` where shell scripts are used.

## Architecture Rules

- `src/pint.json` is the distributable preset and should remain focused on Pint and PHP-CS-Fixer rule configuration.
- Tests should validate observable behavior of the preset file: file presence, valid JSON, expected preset, and meaningful rule expectations.
- Do not add runtime PHP source, service layers, framework bootstrapping, database code, API code, frontend code, or containers unless explicitly required.
- New abstractions require a concrete benefit for this package.

## Code Quality

- Keep changes minimal, reviewable, and scoped to the task.
- Do not leave dead code, commented-out code, unused imports, unused variables, broad ignore rules, or unexplained literals.
- Comments should explain non-obvious reasons, not restate what code does.
- Do not introduce unintended public API or package metadata changes.
- Identify breaking changes explicitly.
- Do not weaken existing quality checks, tests, workflow safeguards, or strictness.

## Naming Conventions

- Composer package names MUST remain lowercase and vendor-qualified.
- Tests SHOULD use descriptive PHPUnit method names consistent with the existing `test_*` style.
- Pint rule names MUST match Laravel Pint or PHP-CS-Fixer rule identifiers exactly.
- Workflow, job, and step names SHOULD be concise and describe the action performed.
- Documentation headings SHOULD use clear, domain-specific names.

## Testing Rules

- PHPUnit is the repository test framework.
- Tests live in `tests/` and are configured by `phpunit.xml`.
- Changes to `src/pint.json` MUST add or update tests when behavior or expected rules change.
- Bug fixes SHOULD include regression tests when feasible.
- Tests MUST be deterministic, isolated, and avoid external network dependencies.
- Do not remove, skip, or weaken tests only to make a change pass.

## Validation Commands

Docker is preferred when a repository provides Docker configuration. This repository currently provides no Docker or Compose configuration, so use project-local Composer commands.

| Change type | Required validation |
| --- | --- |
| Preset JSON | `composer test` after dependencies are installed |
| PHP tests | `composer test` |
| Composer metadata | `composer validate` and `composer test` when dependencies are available |
| GitHub Actions | YAML review plus task-relevant workflow syntax checks if available |
| Documentation or governance only | Review rendered Markdown structure and `git diff --check` |
| Dependencies | `composer validate`, clean dependency install or update review, and `composer test` |

If a command cannot be executed, state why.

## Dependency Management

- Composer is the package manager.
- No `composer.lock` is currently committed.
- Do not add dependencies unless they are necessary for the task and there is no suitable existing dependency.
- Dependency changes MUST consider security, maintenance, licensing, package size, and runtime impact.
- Do not make unrelated upgrades.
- Do not make unrequested major-version updates.
- Do not add or modify lockfiles without a dependency-related reason.

## Security, Privacy, and Compliance

- Do not commit secrets, credentials, tokens, production personal data, or sensitive logs.
- Validate inputs at trust boundaries for any future scripts, commands, or automation.
- Use injection-safe patterns for shell commands and generated workflow scripts.
- Do not bypass authentication, authorization, branch protections, or release safeguards.
- Do not expose internal error details in public-facing automation output.
- Do not disable security controls without explicit approval and a documented reason.
- Do not add telemetry, external services, or content uploads without explicit approval.
- Respect the MIT license and dependency licenses.

## Documentation Rules

- Update documentation when installation, package name, preset usage, validation commands, release behavior, or compatibility changes.
- Do not make unverified claims about supported versions, commands, or integrations.
- Keep examples consistent with `composer.json` and `src/pint.json`.
- Do not manually edit generated documentation if generated documentation is introduced later.

## Git and Change Scope

- Limit changes to the task.
- Do not perform unrelated refactoring or formatting.
- Do not overwrite local changes.
- Do not use destructive Git commands unless explicitly requested.
- Do not commit, push, tag, release, or open pull requests without explicit instruction.
- Do not modify CI/CD, release, dependency, or security configuration unless necessary for the task.
- Keep changes small and reviewable.

## Agent Workflow

1. Read the task and acceptance criteria.
2. Read the applicable `AGENTS.md`.
3. Identify and read only relevant skills from `.agent/skills/`.
4. Inspect only relevant files and existing patterns.
5. Evaluate architecture, dependencies, and risks.
6. Plan the smallest viable change.
7. Implement the change.
8. Add or update tests when required.
9. Run relevant validation commands.
10. Review the diff for unintended changes.
11. Report changes, validation, assumptions, and remaining risks concisely.

Agents MUST NOT begin implementation before checking the applicable rules and skills.

## Definition of Done

A task is complete only when acceptance criteria are met, relevant architecture rules are followed, required tests and validations succeed or skipped checks are disclosed, security and privacy requirements are met, documentation is updated where required, unintended file changes are absent, and assumptions or remaining risks are stated.
