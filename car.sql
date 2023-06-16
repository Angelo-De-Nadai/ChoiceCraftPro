-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versione server:              10.4.14-MariaDB - mariadb.org binary distribution
-- S.O. server:                  Win64
-- HeidiSQL Versione:            11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dump della struttura del database car
CREATE DATABASE IF NOT EXISTS `car` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `car`;

-- Dump della struttura di tabella car.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `cognome` varchar(50) NOT NULL,
  `pw` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Dump dei dati della tabella car.admin: ~2 rows (circa)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`ID`, `nome`, `cognome`, `pw`) VALUES
	(2, 'admin', 'admin', 'admin'),
	(3, 'admin1', 'admin1', 'admin1');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- Dump della struttura di tabella car.classi
CREATE TABLE IF NOT EXISTS `classi` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `classe` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Dump dei dati della tabella car.classi: ~9 rows (circa)
/*!40000 ALTER TABLE `classi` DISABLE KEYS */;
INSERT INTO `classi` (`ID`, `classe`) VALUES
	(1, '1A'),
	(2, '1B'),
	(3, '1C'),
	(4, '2A'),
	(5, '2B'),
	(6, '2C'),
	(7, '3A'),
	(8, '3B'),
	(9, '3C');
/*!40000 ALTER TABLE `classi` ENABLE KEYS */;

-- Dump della struttura di tabella car.classi_doc
CREATE TABLE IF NOT EXISTS `classi_doc` (
  `ID` int(11) NOT NULL,
  `id_doc` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dump dei dati della tabella car.classi_doc: ~0 rows (circa)
/*!40000 ALTER TABLE `classi_doc` DISABLE KEYS */;
/*!40000 ALTER TABLE `classi_doc` ENABLE KEYS */;

-- Dump della struttura di tabella car.docenti
CREATE TABLE IF NOT EXISTS `docenti` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `cognome` varchar(50) NOT NULL,
  `classi` varchar(50) NOT NULL,
  `materie` varchar(50) NOT NULL,
  `pw` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- Dump dei dati della tabella car.docenti: ~4 rows (circa)
/*!40000 ALTER TABLE `docenti` DISABLE KEYS */;
INSERT INTO `docenti` (`ID`, `nome`, `cognome`, `classi`, `materie`, `pw`) VALUES
	(1, 'carlo', 'zamuner', '', 'matematica', 'carlino'),
	(2, 'roberto', 'simionato', '', 'Storia', 'robbymitico'),
	(3, 'diego', 'de pieri', '', 'infromatica', 'visualbasicbetterjava'),
	(4, 'carmen', 'granzotto', '', 'matematica', 'matematicamente');
/*!40000 ALTER TABLE `docenti` ENABLE KEYS */;

-- Dump della struttura di tabella car.domande
CREATE TABLE IF NOT EXISTS `domande` (
  `CODICE_DOM` int(11) NOT NULL AUTO_INCREMENT,
  `testo` varchar(250) NOT NULL,
  `eliminata` tinyint(1) DEFAULT 0,
  PRIMARY KEY (`CODICE_DOM`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dump dei dati della tabella car.domande: ~0 rows (circa)
/*!40000 ALTER TABLE `domande` DISABLE KEYS */;
INSERT INTO `domande` (`CODICE_DOM`, `testo`, `eliminata`) VALUES
	(1, 'Come si chiama Mauro?', 1),
	(2, 'Come si chiama Riccardo?', 0);
/*!40000 ALTER TABLE `domande` ENABLE KEYS */;

-- Dump della struttura di tabella car.domande_test
CREATE TABLE IF NOT EXISTS `domande_test` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `id_test` int(11) NOT NULL,
  `id_domande` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `id_test` (`id_test`),
  KEY `id_domande` (`id_domande`),
  CONSTRAINT `domande_test_ibfk_1` FOREIGN KEY (`id_test`) REFERENCES `test` (`ID`),
  CONSTRAINT `domande_test_ibfk_2` FOREIGN KEY (`id_domande`) REFERENCES `domande` (`CODICE_DOM`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dump dei dati della tabella car.domande_test: ~0 rows (circa)
/*!40000 ALTER TABLE `domande_test` DISABLE KEYS */;
/*!40000 ALTER TABLE `domande_test` ENABLE KEYS */;

-- Dump della struttura di tabella car.materie
CREATE TABLE IF NOT EXISTS `materie` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `materia` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dump dei dati della tabella car.materie: ~6 rows (circa)
/*!40000 ALTER TABLE `materie` DISABLE KEYS */;
INSERT INTO `materie` (`ID`, `materia`) VALUES
	(1, 'italiano'),
	(2, 'storia'),
	(3, 'matematica'),
	(4, 'infomratica'),
	(5, 'sistemi'),
	(6, 'inglese');
/*!40000 ALTER TABLE `materie` ENABLE KEYS */;

-- Dump della struttura di tabella car.risposte
CREATE TABLE IF NOT EXISTS `risposte` (
  `ID_RISP` int(11) NOT NULL AUTO_INCREMENT,
  `CODICE_DOM` int(11) DEFAULT NULL,
  `testo` varchar(250) NOT NULL,
  `corretto` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`ID_RISP`),
  KEY `CODICE_DOM` (`CODICE_DOM`),
  CONSTRAINT `risposte_ibfk_1` FOREIGN KEY (`CODICE_DOM`) REFERENCES `domande` (`CODICE_DOM`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

-- Dump dei dati della tabella car.risposte: ~0 rows (circa)
/*!40000 ALTER TABLE `risposte` DISABLE KEYS */;
INSERT INTO `risposte` (`ID_RISP`, `CODICE_DOM`, `testo`, `corretto`) VALUES
	(1, 1, 'Mauro', 1),
	(2, 1, 'Giovanni', 0),
	(3, 1, 'Gnack', 0),
	(4, 1, 'Dong', 0),
	(5, 2, 'Angelo', 0),
	(6, 2, 'Casti69', 1),
	(7, 2, 'Castie', 1),
	(8, 2, 'Riccardo', 1);
/*!40000 ALTER TABLE `risposte` ENABLE KEYS */;

-- Dump della struttura di tabella car.studenti
CREATE TABLE IF NOT EXISTS `studenti` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `cognome` varchar(50) NOT NULL,
  `classe` varchar(50) NOT NULL,
  `pw` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- Dump dei dati della tabella car.studenti: ~5 rows (circa)
/*!40000 ALTER TABLE `studenti` DISABLE KEYS */;
INSERT INTO `studenti` (`ID`, `nome`, `cognome`, `classe`, `pw`) VALUES
	(1, 'carlo', 'zamuner', '5B', 'lello'),
	(2, 'carlo', 'zamu', '', 'zamu'),
	(3, 'carlo', 'zamu', '', 'zamu'),
	(4, 'carlo', 'zamu', '', 'zamu'),
	(5, 'carlo', 'zamu', '', 'zamu');
/*!40000 ALTER TABLE `studenti` ENABLE KEYS */;

-- Dump della struttura di tabella car.test
CREATE TABLE IF NOT EXISTS `test` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `descrizione` varchar(250) NOT NULL,
  `id_docente` int(11) NOT NULL,
  `id_materia` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `id_docente` (`id_docente`),
  KEY `id_materia` (`id_materia`),
  CONSTRAINT `test_ibfk_1` FOREIGN KEY (`id_docente`) REFERENCES `docenti` (`ID`),
  CONSTRAINT `test_ibfk_2` FOREIGN KEY (`id_materia`) REFERENCES `materie` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dump dei dati della tabella car.test: ~0 rows (circa)
/*!40000 ALTER TABLE `test` DISABLE KEYS */;
/*!40000 ALTER TABLE `test` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
