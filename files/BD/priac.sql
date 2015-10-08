-- phpMyAdmin SQL Dump
-- version 4.2.12deb2
--
-- Host: localhost
-- Generation Time: Oct 08, 2015 at 10:20 AM
-- Server version: 5.6.25-0ubuntu0.15.04.1
-- PHP Version: 5.6.4-4ubuntu6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

-- Database: `priac`

-- --------------------------------------------------------

-- Table structure for table `EncParticipantes`

DROP TABLE IF EXISTS `EncParticipantes`;
CREATE TABLE IF NOT EXISTS `EncParticipantes` (
`idEP` int(11) NOT NULL,
  `0.3` binary(1) DEFAULT NULL,
  `0.4` enum('1','2','3','4','5') DEFAULT NULL,
  `0.4Otro` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `1.1` set('1','2','3','4','5','6','7','8') DEFAULT NULL,
  `1.1Otro` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `1.2` enum('1','2','3','4') DEFAULT NULL,
  `1.3` enum('1','2','3','4') DEFAULT NULL,
  `1.4` binary(1) DEFAULT NULL,
  `1.5` enum('1','2','3','4') DEFAULT NULL,
  `1.6` binary(1) DEFAULT NULL,
  `1.7` binary(1) DEFAULT NULL,
  `2.1` binary(1) DEFAULT NULL,
  `2.2` enum('1','2','3','4') DEFAULT NULL,
  `2.3` enum('1','2','3','4') DEFAULT NULL,
  `2.4` enum('1','2','3','4') DEFAULT NULL,
  `2.5` enum('1','2','3','4') DEFAULT NULL,
  `2.6` enum('1','2','3','4') DEFAULT NULL,
  `2.7` enum('1','2','3','4') DEFAULT NULL,
  `participante` int(11) NOT NULL,
  `proy` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

-- Table structure for table `EncUsuarios`

DROP TABLE IF EXISTS `EncUsuarios`;
CREATE TABLE IF NOT EXISTS `EncUsuarios` (
`idEU` int(11) NOT NULL,
  `0.3` binary(1) NOT NULL,
  `0.4` enum('1','2','3','4','5') NOT NULL,
  `0.4Otro` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `1.1` enum('1','2','3','4','5') DEFAULT NULL,
  `1.1Otro` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `1.2` enum('1','2','3','4') DEFAULT NULL,
  `1.2W` varchar(650) COLLATE utf8_bin DEFAULT NULL,
  `2.1` enum('1','2','3','4') DEFAULT NULL,
  `2.2` enum('1','2','3','4') DEFAULT NULL,
  `3.1` binary(1) DEFAULT NULL,
  `3.2` enum('1','2','3','4') DEFAULT NULL,
  `3.3` enum('1','2','3','4') DEFAULT NULL,
  `4.1` enum('1','2','3','4') DEFAULT NULL,
  `4.2` enum('1','2','3','4') DEFAULT NULL,
  `4.3` enum('1','2','3','4') DEFAULT NULL,
  `usuario` int(11) NOT NULL,
  `proyecto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

-- Table structure for table `FormSistemat`

DROP TABLE IF EXISTS `FormSistemat`;
CREATE TABLE IF NOT EXISTS `FormSistemat` (
`idFormSistemat` int(11) NOT NULL,
  `1.1` set('1','2','3','4','5') NOT NULL,
  `1.1Otro` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `1.2` varchar(1450)COLLATE utf8_bin  NOT NULL,
  `1.3` set('1','2','3','4','5','6','7','8') NOT NULL,
  `1.3Otro` varchar(200) COLLATE utf8_bin NOT NULL,
  `1.4` varchar(1200) COLLATE utf8_bin NOT NULL,
  `1.5` binary(1) NOT NULL,
  `1.5why` varchar(845) COLLATE utf8_bin DEFAULT NULL,
  `1.6` set('1','2','3','4','5') NOT NULL,
  `1.6Otro` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `1.6.1` varchar(800) COLLATE utf8_bin DEFAULT NULL,
  `2.1` varchar(1450) COLLATE utf8_bin NOT NULL,
  `2.2` set('1','2','3','4','5') NOT NULL,
  `2.2Otro` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `2.3` varchar(1450) COLLATE utf8_bin DEFAULT NULL,
  `2.4` binary(1) NOT NULL,
  `2.5` varchar(1550) COLLATE utf8_bin DEFAULT NULL,
  `2.6` varchar(1500) COLLATE utf8_bin DEFAULT NULL,
  `3.1` binary(1) NOT NULL,
  `3.2` varchar(1150) COLLATE utf8_bin DEFAULT NULL,
  `3.3` varchar(1450) COLLATE utf8_bin DEFAULT NULL,
  `3.4` binary(1) NOT NULL,
  `3.5` binary(1) DEFAULT NULL,
  `3.6` binary(1) NOT NULL,
  `3.7` varchar(1450) COLLATE utf8_bin DEFAULT NULL,
  `3.8` binary(1) NOT NULL,
  `3.9` varchar(1450) COLLATE utf8_bin DEFAULT NULL,
  `3.10` varchar(1450) COLLATE utf8_bin DEFAULT NULL,
  `3.11` binary(1) DEFAULT NULL,
  `3.11why` varchar(1000) COLLATE utf8_bin DEFAULT NULL,
  `director` int(11) NOT NULL,
  `proyecto` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

-- Table structure for table `Persona`

DROP TABLE IF EXISTS `Persona`;
CREATE TABLE IF NOT EXISTS `Persona` (
`idPersona` int(11) NOT NULL,
  `nombre` varchar(145) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `fechaNac` date DEFAULT NULL,
  `edad` int(11) NOT NULL,
  `lugarNac` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Dumping data for table `Persona`
INSERT INTO `Persona` (`idPersona`, `nombre`, `fechaNac`, `edad`, `lugarNac`) VALUES
(0, 'William Andrés Rodríguez Mora', '1992-01-22', 15, 'Villavicencio');

-- --------------------------------------------------------

-- Table structure for table `Proyecto`

DROP TABLE IF EXISTS `Proyecto`;
CREATE TABLE IF NOT EXISTS `Proyecto` (
  `idProyecto` int(11) NOT NULL,
  `nombre` varchar(500) COLLATE utf8_bin NOT NULL,
  `facultad` varchar(45) COLLATE utf8_bin NOT NULL,
  `sede` enum('Bogotá','Medellín','Manizales','Palmira','Orinoquía','Tumaco','Amazonía','San Andrés') COLLATE utf8_bin NOT NULL,
  `regionDesarrollo` varchar(45) COLLATE utf8_bin NOT NULL,
  `fechaIngreso` date NOT NULL,
  `modalidadExtension` enum('1','2','3','4','5','6','7','8','9') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;





-- Indexes for table `EncParticipantes`

ALTER TABLE `EncParticipantes`
 ADD PRIMARY KEY (`idEP`), ADD KEY `EncParticipantes_idx` (`participante`);

-- Indexes for table `EncUsuarios`

ALTER TABLE `EncUsuarios`
 ADD PRIMARY KEY (`idEU`), ADD KEY `usuario_idx` (`usuario`), ADD KEY `proyecto_idx` (`proyecto`);

-- Indexes for table `FormSistemat`

ALTER TABLE `FormSistemat`
 ADD PRIMARY KEY (`idFormSistemat`), ADD KEY `proyecto_idx` (`proyecto`), ADD KEY `director_idx` (`director`);

-- Indexes for table `Persona`

ALTER TABLE `Persona`
 ADD PRIMARY KEY (`idPersona`);

--
-- Indexes for table `Proyecto`
--
ALTER TABLE `Proyecto`
 ADD PRIMARY KEY (`idProyecto`);




-- AUTO_INCREMENT for table `EncParticipantes`
--
ALTER TABLE `EncParticipantes`
MODIFY `idEP` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=0;
--
-- AUTO_INCREMENT for table `EncUsuarios`
--
ALTER TABLE `EncUsuarios`
MODIFY `idEU` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=0;
--
-- AUTO_INCREMENT for table `FormSistemat`
--
ALTER TABLE `FormSistemat`
MODIFY `idFormSistemat` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=0;
--
-- AUTO_INCREMENT for table `Persona`
--
ALTER TABLE `Persona`
MODIFY `idPersona` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1;

ALTER TABLE `Proyecto`
MODIFY `idProyecto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=0;

-- Constraints for table `EncParticipantes`
--
ALTER TABLE `EncParticipantes`
ADD CONSTRAINT `fk_proyectoENCP` FOREIGN KEY (`proy`) REFERENCES `Proyecto` (`idProyecto`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `fk_usuarioENCP` FOREIGN KEY (`participante`) REFERENCES `Persona` (`idPersona`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `EncUsuarios`
--
ALTER TABLE `EncUsuarios`
ADD CONSTRAINT `fk_proyectoENCU` FOREIGN KEY (`proyecto`) REFERENCES `Proyecto` (`idProyecto`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `fk_usuarioENCU` FOREIGN KEY (`usuario`) REFERENCES `Persona` (`idPersona`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `FormSistemat`
--
ALTER TABLE `FormSistemat`
ADD CONSTRAINT `fk_directorFORM` FOREIGN KEY (`director`) REFERENCES `Persona` (`idPersona`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `fk_proyectoFORM` FOREIGN KEY (`proyecto`) REFERENCES `Proyecto` (`idProyecto`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
