@echo off
echo ===================================================
echo    Démarrage du Portfolio BTS SIO SISR
echo ===================================================
echo.

echo Lancement des conteneurs Docker...
docker-compose up -d

echo.
echo ===================================================
echo    Portfolio accessible sur http://localhost:8082
echo ===================================================
echo.
echo Appuyez sur une touche pour arrêter les conteneurs...
pause > nul

echo.
echo Arrêt des conteneurs Docker...
docker-compose down

echo.
echo ===================================================
echo    Les conteneurs ont été arrêtés avec succès
echo ===================================================
echo.
pause
