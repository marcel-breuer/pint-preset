# Skill: Update Pint Preset

## Purpose

Safely change the distributed Laravel Pint configuration in `src/pint.json`.

## When to Use

Use when adding, removing, or changing Pint or PHP-CS-Fixer rules, changing the preset name, or validating preset behavior.

## When Not to Use

Do not use for documentation-only changes, dependency-only changes, or CI-only changes.

## Required Context

- `AGENTS.md`
- `src/pint.json`
- `tests/PintPresetConfigTest.php`
- Relevant Laravel Pint or PHP-CS-Fixer documentation for changed rules

## Relevant Project Areas

- `src/pint.json`
- `tests/`
- `README.md` when usage or documented behavior changes

## Procedure

1. Inspect the current JSON structure and nearby rule style.
2. Confirm changed rule names and values are valid for the supported Pint/PHP-CS-Fixer version.
3. Make the smallest targeted JSON edit.
4. Update PHPUnit assertions for observable preset expectations.
5. Update documentation only if user-facing behavior changes.

## Validation

- Run `composer test` after dependencies are installed.
- Confirm `src/pint.json` remains valid JSON.

## Expected Output

Report changed rules, changed files, validation results, and any compatibility assumptions.

## Constraints

- Do not add runtime PHP source unless explicitly required.
- Do not reformat unrelated JSON entries.
- Do not remove strictness or existing rules without a stated reason.

## Completion Criteria

The preset is valid JSON, expected rules are tested, documentation is aligned where needed, and required validation has passed or skipped checks are disclosed.
