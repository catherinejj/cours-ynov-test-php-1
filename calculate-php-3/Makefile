#Doc : https://makefiletutorial.com/
VENDOR_BIN = vendor/bin

#Pour tout lancer si on veut tout lancer ;)
all: stan test fix behat

stan:
	$(VENDOR_BIN)/phpstan analyse src tests views
test:
	$(VENDOR_BIN)/phpunit tests/utils
fix:
	$(VENDOR_BIN)/php-cs-fixer fix
behat:
	$(VENDOR_BIN)/behat