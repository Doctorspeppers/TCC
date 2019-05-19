<?php



--------------------
--C R U D  U S E R--
--------------------


--CREATE
INSERT INTO `User` (`idUser`, `nameUser`, `emailUser`, `permissionUser`, `birthdayUser`, `creationdateUser`, `passwordUser`, `genderUser`) VALUES (NULL, ':nameUser', ':emailUser', ':permissionUser', ':birthdayUser', CURRENT_TIMESTAMP, ':passwordUser', ':genderUser');



--READ
SELECT * FROM `User` WHERE `emailUser` = ':email' AND `passwordUser`=':password'





--UPDATE
UPDATE `user` SET `nameUser` = ':nameUser', `emailUser` = ':emailUser', `permissionUser` = ':permissionUser', `birthdayUser` = ':birthdayUser', `genderUser` = ':genderUser' WHERE `user`.`idUser` = ':idUser' 



--DELETE
DELETE FROM `User` WHERE `User`.`idUser` = 1


--------------------------
--C R U D  C O M M E N T--
--------------------------


--CREATE
INSERT INTO `Comment` (`idComment`, `textComment`, `fk_idUser`, `fk_idItem`) VALUES (NULL, ':textComment', ':idUser', ':idItem')



--SELECT
SELECT * FROM `Comment` WHERE fk_idItem = ':idItem'



--UPDATE
UPDATE `Comment` SET `textComment` = ':textComment', WHERE `Comment`.`idComment` = ':idComment'



--DELETE
DELETE FROM `Comment` WHERE `Comment`.`idComment` = ':idComment'


------------------------------
--C R U D  F A V O R I T E S--
------------------------------

--CREATE
INSERT INTO `Favorites` (`idFavorites`, `fk_idUser`, `fk_idItem`) VALUES (NULL, ':idUser', ':idItem')



--READ
--numero de favoritos de um Item
SELECT COUNT(idFavorites) FROM `Favorites` WHERE fk_idItem = ':idItem'
--ids das pessoas q favoritaram um Item
SELECT fk_idUser FROM `Favorites` WHERE fk_idItem = ':idItem'
--ids dos itens q uma pessoa favoritou
SELECT fk_idItem FROM `Favorites` WHERE fk_idUser = ':idUser'



--UPDATE
--não faz sentido ter update de favorito



--DELETE
DELETE FROM `Favorites` WHERE `Favorites`.`fk_idUser` = ':idUser' AND `Favorites`.`fk_idItem` = ':idItem'


------------------------------------
--C R U D  R E L A T I O N S H I P--
------------------------------------


--CREATE
INSERT INTO `Relationship` (`idRelationship`, `fk_idUser`, `fk_idFriend`) VALUES (NULL, ':idUser', ':idFriend')



--READ
--mostra os amigos de um certo usuario
SELECT 'idFriend' FROM `Relationship` WHERE `Relationship`.`fk_idUser` = ':idUser'


--UPDATE
--nao faz sentido uma update de relacionamento



--DELETE
DELETE FROM `Relationship` WHERE `Relationship`.`fk_idUser` = ':idUser' AND `Relationship`.`fk_idFriend` = ':idFriend'

--------------------
--V I E W  I T E M--
--------------------

SELECT * FROM `Item` WHERE `Item`.`idItem` = ':idItem'

------------------------
--S E A R C H  I T E M--
------------------------

--Por categoria
SELECT DISTINCT "category" FROM `Item` WHERE `Item`.`nameItem` LIKE %':nameItem'%
--Por nome de Item
SELECT * FROM `Item` WHERE `Item`.`nameItem` LIKE %':nameItem'%


--------------
--T O K E N--
-------------
--insertToken
INSERT INTO 'token' ('token','hashIPToken','dateCreationToken','expireToken','fk_idUser') VALUES (':token',':hashIPToken',':dateCreationToken',':expireToken',':idUser')
--getToken
SELECT * FROM 'token' WHERE 'token'=':token' AND 'hashIpToken'=':hashIpToken' AND ':currentDate' BETWEEN 'token.dateCreationToken' AND 'token.expireDateToken'
--DeleteoutdatedToken
DELETE FROM 'token' WHERE ':currentDate' NOT BETWEEN 'token.dateCreationToken' AND 'token.expireDateToken'






