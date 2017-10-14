php ./vendor/bin/phpmetrics --report-html=reporting/phpmetrics .
phpunit -c phpunit.xml.dist --testsuite=project --coverage-text
