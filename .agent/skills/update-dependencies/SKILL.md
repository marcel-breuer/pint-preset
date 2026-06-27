# Skill: Update Dependencies

## Purpose

Manage Composer dependency and package metadata changes safely.

## When to Use

Use when editing dependency constraints, Composer package metadata, supported PHP versions, or development tooling requirements in `composer.json`.

## When Not to Use

Do not use for Pint rule-only changes or documentation-only updates.

## Required Context

- `AGENTS.md`
- `composer.json`
- Relevant official Composer, PHP, PHPUnit, or Laravel Pint documentation

## Relevant Project Areas

- `composer.json`
- `README.md` if installation or requirements change
- `tests/` if dependency behavior affects validation

## Procedure

1. Identify why the dependency or metadata change is necessary.
2. Keep constraints as narrow as the task allows while preserving compatibility.
3. Avoid unrelated upgrades and unrequested major-version changes.
4. Update documentation when requirements or install instructions change.
5. Review whether a lockfile change is appropriate; none is currently committed.

## Validation

- Run `composer validate`.
- Run `composer test` when dependencies are installed.

## Expected Output

Report dependency changes, compatibility impact, validation results, and skipped checks.

## Constraints

- Do not add duplicate libraries for the same purpose.
- Do not add dependencies without considering security, licensing, maintenance, and runtime impact.

## Completion Criteria

Composer metadata is valid, related docs are aligned, and tests pass or skipped validation is explained.
