-- Mentionne le nom de la base de données à utiliser pour exécuter les commandes SQL qui suivent.
USE `410-php-database-HTR`;

INSERT INTO typeNavire(id, nom) VALUES
     (10, 'Cargo')
    ,(20, 'Ferry')
;

INSERT INTO navire(id, idTypeNavire, numeroIMO, nom) VALUES
     (10, 20, 'IMO 1117777', 'Bonaparte')
    ,(20, 20, 'IMO 2227777', 'Monte Cinto')
    ,(30, 20, 'IMO 3333777', 'Paglia Orba')
    ,(40, 10, 'IMO 4447777', 'Stena Carrier')
;

INSERT INTO service(id, nom) VALUES
     (10, 'Pont')
    ,(20, 'Machine')
    ,(30, 'Hotellerie')
    ,(40, 'Restauration')
;

INSERT INTO serviceAutorise(idTypeNavire, idService) VALUES
     (10, 10)
    ,(10, 20)
    ,(10, 40)
    ,(20, 10)
    ,(20, 20)
    ,(20, 30)
    ,(20, 40)
;

INSERT INTO port(id, nom) VALUES
     (10, 'Marseille')
    ,(20, 'Toulon')
    ,(30, 'Nice')
    ,(40, 'Ajaccio')
    ,(50, 'Bastia')
    ,(60, 'Ile Rousse')
    ,(70, 'Porto Vecchio')
;

INSERT INTO activite(id, idService, nom) VALUES
     (10, 10, 'Ammarage')
    ,(20, 10, 'Accueil du public')
    ,(30, 20, 'Machine')
    ,(40, 30, 'Blanchisserie')
    ,(50, 30, 'Ménage')
    ,(60, 40, 'Mise en place')
    ,(70, 40, 'Service')
    ,(80, 40, 'Cuisine')
;

INSERT INTO marin(id, matricule, nom, prenom) VALUES
     (10, 'AV22123307', 'SIMEONI', 'Dominique')
    ,(20, 'TQ43578891', 'ANTONI', 'Pasquale')
    ,(30, 'CF75643112', 'PANZANI', 'Thomas')
;

INSERT INTO traversee(id, idNavire, reference, idPortDepart, idPortArrivee, dateDepart) VALUES
     (10, 20, 'MRS-AJO-23', 10, 40, '2023-06-20 08:00:00')
    ,(20, 10, 'MRS-BST-41', 10, 50, '2023-06-21 09:00:00')
    ,(30, 10, 'MRS-PVC-54', 10, 70, '2023-06-22 08:30:00')
;

INSERT INTO planning(id, idTraversee) VALUES
     (10, 10)
;

INSERT INTO affectation(id, idPlanning, idMarin, idActivite, heureDebut, heureFin) VALUES
     (10, 10, 10,10, '08:00:00', '08:30:00')
    ,(20, 10, 20,20, '08:00:00', '09:00:00')
    ,(30, 10, 20,10, '15:30:00', '16:00:00')
;