# Shared Skills

Skills are reusable, tool-independent instructions for recurring work in this repository. `AGENTS.md` remains authoritative.

Before using a skill:

1. Read the applicable `AGENTS.md`.
2. Identify relevant skills.
3. Read only those skills.
4. Apply the skill together with repository rules.
5. If instructions conflict, report the conflict and apply the stricter or safer rule.

| Skill | Purpose | Use when | File |
| --- | --- | --- | --- |
| Update Pint Preset | Change the distributed Laravel Pint rule set | Editing `src/pint.json` or expected formatting rules | `.agent/skills/update-pint-preset/SKILL.md` |
| Write Tests | Add or update PHPUnit coverage | Changing preset behavior or test expectations | `.agent/skills/write-tests/SKILL.md` |
| Update Dependencies | Change Composer package requirements | Editing `composer.json` dependencies or constraints | `.agent/skills/update-dependencies/SKILL.md` |
| Documentation Change | Keep docs aligned with package behavior | Editing README, changelog guidance, usage examples, or governance docs | `.agent/skills/documentation-change/SKILL.md` |
| CI/CD Change | Modify release or changelog automation | Editing `.github/workflows/` | `.agent/skills/ci-cd-change/SKILL.md` |
| Review Code | Review repository changes before merge | Performing code review or pre-merge assessment | `.agent/skills/review-code/SKILL.md` |
