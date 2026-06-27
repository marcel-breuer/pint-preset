# Skill: Write Tests

## Purpose

Add or update PHPUnit tests that protect the Laravel Pint preset.

## When to Use

Use when changing `src/pint.json`, fixing a preset validation issue, or adding coverage for package metadata behavior that can be tested locally.

## When Not to Use

Do not use for documentation-only changes unless the documentation change exposes a missing tested behavior.

## Required Context

- `AGENTS.md`
- `phpunit.xml`
- Existing tests in `tests/`
- Files under test

## Relevant Project Areas

- `tests/PintPresetConfigTest.php`
- `src/pint.json`
- `composer.json` when tests depend on package metadata

## Procedure

1. Follow the existing PHPUnit style and `test_*` method naming.
2. Test observable outcomes rather than implementation details.
3. Keep tests deterministic and file-system local.
4. Avoid broad snapshots; assert specific keys and values that matter.
5. Keep fixture data inline only when small and clear.

## Validation

- Run `composer test` after dependencies are installed.

## Expected Output

Report the tested behavior and validation result.

## Constraints

- Do not weaken, skip, or remove existing tests to pass validation.
- Do not introduce network, database, or framework bootstrapping dependencies.

## Completion Criteria

Relevant behavior is covered, tests are readable, and the PHPUnit suite passes or skipped validation is explained.
