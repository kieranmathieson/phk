-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2017 at 08:35 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phk`
--

-- --------------------------------------------------------

--
-- Table structure for table `diagnosis_state`
--

CREATE TABLE `diagnosis_state` (
  `id` int(11) NOT NULL,
  `state_name` varchar(255) NOT NULL,
  `notes` text NOT NULL,
  `pathogens` text NOT NULL,
  `empiric_therapy` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `diagnosis_state`
--

INSERT INTO `diagnosis_state` (`id`, `state_name`, `notes`, `pathogens`, `empiric_therapy`) VALUES
(0, 'Diagnosis State', 'Notes', 'Pathogens', 'Empiric Therapy'),
(1, 'Sepsis of unknown source', 'Add gentamicin or amikacin for patients with severe sepsis or septic shock. Stop after 3 days if a beta-lactam resistant organism is not isolated or if cultures were not obtained.', 'Enterobacteriaciae, Staphylococci, Streptococci', 'All patients:  Piperacillin/tazobactam + gentamicin ± vancomycin (or linezolid); Critically ill or neutropenic patients: Imipenem/cilastatin ± gentamicin ± vancomycin (or linezolid)'),
(2, 'COPD Exacerbation (inpatient)', 'Increased sputum volume and/or purulence OR Acute respiratory failure requiring ICU admission', 'H. influenzae, S. pneumoniae, M. catarrhalis', 'Preferred: Azithromycin, Amoxicillin/clavulanate'),
(3, 'Intra-abdominal infection - Community-acquired', '(e.g. cholecystitis, cholangitis, diverticulitis, abscess)', 'Enterobacteriaceae, Bacteroides sp., Enterococci, Streptococci', 'Preferred: Piperacillin/tazobactam + gentamicin; Cefepime + metronidazole + gentamicin; Cefotaxime + gentamicin; Oral options for outpatient therapy: Ofloxacin + metronidazole'),
(4, 'Intra-abdominal infection - Severe sepsis/septic shock with MDR suspected', 'Add gentamicin  or amikacin for patients with severe sepsis or septic shock. Stop after 3 days if a beta-lactam resistant organism is not isolated or if cultures were not obtained.', 'Enterobacteriaceae, Bacteroides sp., P. aeruginosa, Enterococci, Staphylococci, Streptococci', 'Preferred: Imipenem/cilastatin ± gentamicin ± vancomycin (or linezolid)'),
(5, 'Meningitis - Community-acquired', 'Risk factors for Listeria spp.: EtOH abuse, age >50, pregnancy', 'Ceftriaxone + vancomycin (or linezolid) ± ampicillin (if risk factors for Listeria spp. present)', 'Preferred:  Ceftriaxone + vancomycin (or linezolid) ± ampicillin (if risk factors for Listeria spp. present)'),
(6, 'Osteomyelitis', '', 'Staphylococci, Streptococci, anaerobes, Gram-negative bacteria', 'In cases where empiric therapy is required due to infection that threatens limb or life, antibiotics should be selected according to the source of osteomyelitis (ie. per recommendations for diabetic foot infection, etc.). Other intravenous considerations: Cefazolin +/- metronidazole; Oral Options:  Ciprofloxacin ± doxycycline or clindamycin'),
(7, 'Pelvic inflammatory disease', '', 'Chlamydia, N. gonorrhoeae Enterobacteriaceae, Group B Streptococci', 'In cases where empiric therapy is required due to infection that threatens limb or life, antibiotics should be selected according to the source of osteomyelitis (i.e. per recommendations for diabetic foot infection, etc). Other intravenous considerations:  Cefazolin +/- metronidazole; Oral Options:  Ciprofloxacin ± doxycycline or clindamycin'),
(8, 'Pneumonia - Community-acquired Inpatient therapy', '', 'S. pneumoniae, H. influenzae, Mycoplasma sp., Chlamydophila sp., Legionella sp.', 'Ceftriaxone + azithromycin OR doxycycline; Amoxicillin ± azithromycin; Moxifloxacin'),
(9, 'Pneumonia - Community-acquired Outpatient therapy', '', 'S. pneumoniae, H. influenzae, Mycoplasma sp., Chlamydophila sp., Legionella sp. (e.g. atypicals)', 'Azithromycin PO; For patients with comorbidities: Moxifloxacin, ofloxacin, or levofloxacin PO; Amoxicillin + azithromycin PO'),
(10, 'Pneumonia - Risk factors for multidrug resistant bacteria* (healthcare or ventilator associated)', 'Add gentamicin or amikacin in patients with severe sepsis or septic shock. Stop after 3 days if a beta-lactam resistant organism is not isolated or if cultures were not obtained.', 'S. pneumoniae, H. influenzae, Mycoplasma sp., Chlamydophila sp., Legionella sp. (e.g. atypicals)', 'Patients with risk factors for multi-drug resistant bacteria: Imipenem/cilastatin ± gentamicin ± vancomycin (or linezolid); Piperacillin/tazobactam + gentamicin ± vancomycin (or linezolid); For patients presenting from the community who are at risk for atypical infection) - Add azithromycin OR doxycycline; When Acinetobacter sp. is suspected: Polymyxin B ± tigecycline ± rifampin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diagnosis_state`
--
ALTER TABLE `diagnosis_state`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
