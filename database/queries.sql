<?php



--------------------
--C R U D  U S E R--
--------------------


--CREATE
INSERT INTO `user` (`idUser`, `nameUser`, `emailUser`, `permissionUser`, `birthdayUser`, `creationdateUser`, `passwordUser`, `genderUser`) VALUES (NULL, ':nameUser', ':emailUser', ':permissionUser', ':birthdayUser', CURRENT_TIMESTAMP, ':passwordUser', ':genderUser');



--READ
SELECT * FROM `User` WHERE `emailUser` = ':email' AND `passwordUser`=':password'





--UPDATE
UPDATE `user` SET `nameUser` = ':nameUser', `emailUser` = ':emailUser', `permissionUser` = ':permissionUser', `birthdayUser` = ':birthdayUser', `genderUser` = ':genderUser' WHERE `user`.`idUser` = ':idUser' 



--DELETE
DELETE FROM `user` WHERE `user`.`idUser` = ':idUser'


--------------------------
--C R U D  C O M M E N T--
--------------------------


--CREATE
INSERT INTO `comment` (`idComment`, `textComment`, `fk_idUser`, `fk_idItem`) VALUES (NULL, ':textComment', ':idUser', ':idItem')



--SELECT
SELECT * FROM `comment` WHERE fk_idItem = ':idItem'



--UPDATE
UPDATE `comment` SET `textComment` = ':textComment', WHERE `comment`.`idComment` = ':idComment'



--DELETE
DELETE FROM `comment` WHERE `comment`.`idComment` = ':idComment'


------------------------------
--C R U D  F A V O R I T E S--
------------------------------

--CREATE
INSERT INTO `favorites` (`idFavorites`, `fk_idUser`, `fk_idItem`) VALUES (NULL, ':idUser', ':idItem')



--READ
--numero de favoritos de um item
SELECT COUNT(idFavorites) FROM `favorites` WHERE fk_idItem = ':idItem'
--ids das pessoas q favoritaram um item
SELECT fk_idUser FROM `favorites` WHERE fk_idItem = ':idItem'
--ids dos itens q uma pessoa favoritou
SELECT fk_idItem FROM `favorites` WHERE fk_idUser = ':idUser'



--UPDATE
--não faz sentido ter update de favorito



--DELETE
DELETE FROM `favorites` WHERE `favorites`.`fk_idUser` = ':idUser' AND `favorites`.`fk_idItem` = ':idItem'


------------------------------------
--C R U D  R E L A T I O N S H I P--
------------------------------------


--CREATE
INSERT INTO `relationship` (`idRelationship`, `fk_idUser`, `fk_idFriend`) VALUES (NULL, ':idUser', ':idFriend')



--READ
--mostra os amigos de um certo usuario
SELECT idFriend FROM `relationship` WHERE `relationship`.`fk_idUser` = ':idUser'


--UPDATE
--nao faz sentido uma update de relacionamento



--DELETE
DELETE FROM `relationship` WHERE `relationship`.`fk_idUser` = ':idUser' AND `relationship`.`fk_idFriend` = ':idFriend'

--------------------
--V I E W  I T E M--
--------------------

SELECT * FROM `item` WHERE `item`.`idItem` = ':idItem'

------------------------
--S E A R C H  I T E M--
------------------------

--Por categoria
SELECT DISTINCT "category" FROM `item` WHERE `item`.`nameItem` LIKE %':nameItem'%
--Por nome de item
SELECT * FROM `item` WHERE `item`.`nameItem` LIKE %':nameItem'%


--------------
--T O K E N--
-------------
--getToken
INSERT INTO 'token' ('token','hashIPToken','dateCreationToken','expireToken','fk_idUser') VALUES (':token',':hashIPToken',':dateCreationToken',':expireToken',':idUser')
--getToken
SELECT * FROM 'token' where 'token'=':token' and 'hashIpToken'=':hashIpToken' and ':currentDate' BETWEEN 'token.dateCreationToken' AND 'token.expireDateToken'
--DeleteoutdatedToken
DELETE FROM 'token' where ':currentDate' NOT BETWEEN 'token.dateCreationToken' AND 'token.expireDateToken'






