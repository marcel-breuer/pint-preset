# Skill: CI/CD Change

## Purpose

Modify GitHub Actions release and changelog automation safely.

## When to Use

Use when editing files under `.github/workflows/`.

## When Not to Use

Do not use for application, preset, test, or documentation-only changes outside workflow behavior.

## Required Context

- `AGENTS.md`
- Target workflow file
- Related release or changelog documentation
- Relevant GitHub Actions documentation for changed syntax

## Relevant Project Areas

- `.github/workflows/tag-on-main-merge.yml`
- `.github/workflows/changelog-on-tag.yml`
- `CHANGELOG.md`

## Procedure

1. Identify the trigger, permissions, jobs, and side effects of the workflow.
2. Keep permissions minimal and explicit.
3. Preserve tag and changelog behavior unless the task requires changing it.
4. Keep shell scripts strict with `set -euo pipefail`.
5. Avoid changing release automation together with unrelated package changes.

## Validation

- Review YAML syntax.
- Use an available workflow linter or GitHub Actions validation when configured.
- Run `git diff --check`.

## Expected Output

Report workflow behavior changed, validation performed, and any validation not available locally.

## Constraints

- Do not add secrets, external services, or new write permissions without explicit need.
- Do not disable release safeguards without approval.

## Completion Criteria

Workflow changes are minimal, syntax is valid, permissions are justified, and side effects are documented.
