Unblock secret melalui GitHub

…or create a new repository on the command line
echo "# barangelektronik" >> README.md
git init
git add README.md
git commit -m "first commit"
git branch -M main
git remote add origin https://github.com/emperorrqi/barangelektronik.git
git push -u origin main

or push an existing repository from the command line
git remote add origin https://github.com/emperorrqi/barangelektronik.git
git branch -M main
git push -u origin main


git remote -v

git remote set-url origin https://github.com/emperorrqi/barangelektronik.git

git remote -v

git remote remove origin
git remote add origin https://github.com/emperorrqi/barangelektronik.git

git remote -v
git remote -v

git branch -M main
git push -u origin main

git rm app/Dockerfile
git add Dockerfile
git commit -m "Move Dockerfile to root for Render"
git push origin main
