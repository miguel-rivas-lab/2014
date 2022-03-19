echo "Getting ready for deployment"
git push git@github.com:miguel-rivas/2014.git --delete gh-pages
npm run build
cd public || exit
git init
git add -A
git commit -m 'deploy'
git push -f git@github.com:miguel-rivas/2014.git master:gh-pages