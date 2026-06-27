# Skill: Documentation Change

## Purpose

Keep repository documentation accurate and concise.

## When to Use

Use when editing `README.md`, `CHANGELOG.md`, governance files, usage examples, setup instructions, or compatibility notes.

## When Not to Use

Do not use as a substitute for code or test changes required by behavior changes.

## Required Context

- `AGENTS.md`
- Documentation files being edited
- Source or configuration files that support the documented claim

## Relevant Project Areas

- `README.md`
- `CHANGELOG.md`
- `AGENTS.md`
- `.agent/skills/`
- Agent adapter files

## Procedure

1. Verify claims against repository files.
2. Keep examples consistent with `composer.json` package name and `src/pint.json` location.
3. Prefer concise instructions over broad background.
4. Update only sections affected by the task.
5. Preserve generated changelog automation expectations if editing `CHANGELOG.md`.

## Validation

- Run `git diff --check`.
- Review Markdown structure for broken headings, links, and code fences.

## Expected Output

Report documentation files changed and validation performed.

## Constraints

- Do not document commands, services, or integrations that do not exist.
- Do not duplicate full rules across adapter files.

## Completion Criteria

Documentation is accurate, scoped, and consistent with repository configuration.
