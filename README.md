# Dev Ops

## Requirements

-   Python3, look at `/ansible/.python-version`
-   Ansible, install dependencies from `/ansible/requirements.txt`
-   Ansible Galaxy, install dependencies from `/ansible/requirements.yml`

# Rollback

If you have committed code to `main` and need to rollback, you can follow these guidelines.

Please note that we are not trying to remove any commits. We will revert the commit and that change will be saved in our history. This keeps the git timeline always moving forward.

1. Switch to the `main` branch and make sure it is up to date with `git pull`
1. Create a new branch `git checkout -b revert-IT-###`
1. Find the commit hash you want to revert
1. Revert the commit, `git revert ${the-hash-you-want-to-revert}`
1. Commit the changes and push the reverted branch to GitHub
1. Have someone approve the PR and merge it to main
1. GitHub actions will deploy the reverted code
