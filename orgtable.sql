-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2024 at 07:56 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `orgtable`
--

-- --------------------------------------------------------

--
-- Table structure for table `activites`
--

CREATE TABLE `activites` (
  `actAutoCounter` int(11) NOT NULL,
  `actType` int(11) NOT NULL,
  `actName` text NOT NULL,
  `actDate` date NOT NULL,
  `UsersCount` int(11) DEFAULT NULL,
  `actParti` text DEFAULT NULL,
  `reportId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `center`
--

CREATE TABLE `center` (
  `centerId` int(11) NOT NULL,
  `university` int(11) NOT NULL,
  `saType` int(11) NOT NULL,
  `therpistNumber` int(11) NOT NULL,
  `socialNumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `consultation`
--

CREATE TABLE `consultation` (
  `consultationType` varchar(191) NOT NULL,
  `consultationNumbers` int(11) NOT NULL,
  `phoneConsultation` int(11) NOT NULL,
  `inPersonConsultation` int(11) NOT NULL,
  `consultationUsers` int(11) NOT NULL,
  `monthId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `courseNumbers` int(11) NOT NULL,
  `courseNames` varchar(191) NOT NULL,
  `courseUsers` int(11) NOT NULL,
  `monthId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `university` varchar(255) NOT NULL,
  `eventTitle` varchar(255) NOT NULL,
  `eventStartDate` date NOT NULL,
  `eventStartTime` time NOT NULL,
  `eventEndDate` date NOT NULL,
  `eventEndTime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fileupload`
--

CREATE TABLE `fileupload` (
  `id` int(11) NOT NULL,
  `university_id` int(11) DEFAULT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `file_path` varchar(255) DEFAULT NULL,
  `uploaded_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lectures`
--

CREATE TABLE `lectures` (
  `lectureNum` int(11) NOT NULL,
  `lectureLabels` varchar(191) NOT NULL,
  `lectureUsers` int(11) NOT NULL,
  `monthId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `role` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `monthlyreport`
--

CREATE TABLE `monthlyreport` (
  `tableId` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `actType` varchar(191) NOT NULL,
  `university` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `others`
--

CREATE TABLE `others` (
  `otherAct` varchar(191) NOT NULL,
  `otherUsers` int(11) NOT NULL,
  `monthId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reportable1`
--

CREATE TABLE `reportable1` (
  `reportId` int(11) NOT NULL,
  `university` int(191) NOT NULL,
  `supervisor` text NOT NULL,
  `initiativeLeader` text NOT NULL,
  `date` date NOT NULL,
  `studentNumber` int(11) NOT NULL,
  `groupLeader` text NOT NULL,
  `activityCount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `reportId` int(11) NOT NULL,
  `currentYear` year(4) NOT NULL,
  `weightedSum` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `universityname`
--

CREATE TABLE `universityname` (
  `id` int(11) NOT NULL,
  `university_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `universityname`
--

INSERT INTO `universityname` (`id`, `university_name`) VALUES
(1, 'الجامعة الإسلامية بالمدينة المنورة'),
(2, 'الجامعة السعودية الإلكترونية'),
(3, 'الجامعة العربية المفتوحة'),
(4, 'جامعة الإمام عبدالرحمن بن فيصل'),
(5, 'جامعة الإمام محمد بن سعود الإسلامية'),
(6, 'جامعة الأمير سطام'),
(7, 'جامعة الأميرة نورة'),
(8, 'جامعة الباحة'),
(9, 'جامعة الجوف'),
(10, 'جامعة الحدود الشمالية'),
(11, 'جامعة الطائف'),
(12, 'جامعة القصيم '),
(13, 'جامعة المجمعة'),
(14, 'جامعة الملك خالد'),
(15, 'جامعة الملك سعود'),
(16, 'جامعة الملك سعود بن عبدالعزيز للعلوم الصحية'),
(17, 'جامعة الملك عبدالعزيز'),
(18, 'جامعة الملك فيصل'),
(19, 'جامعة أم القرى'),
(20, 'جامعة بيشة'),
(21, 'جامعة تبوك'),
(22, 'جامعة جازان'),
(23, 'جامعة جدة'),
(24, 'جامعة حائل'),
(25, 'جامعة حفر الباطن'),
(26, 'جامعة شقراء'),
(27, 'جامعة طيبة'),
(28, 'جامعة فهد بن سلطان'),
(29, 'جامعة نجران'),
(30, 'كليات الريان الأهلية');

-- --------------------------------------------------------

--
-- Table structure for table `uploaded_files`
--

CREATE TABLE `uploaded_files` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `is_approved` tinyint(1) DEFAULT 0,
  `uploaded_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activites`
--
ALTER TABLE `activites`
  ADD PRIMARY KEY (`actAutoCounter`),
  ADD KEY `universityId` (`reportId`),
  ADD KEY `actType` (`actType`);

--
-- Indexes for table `center`
--
ALTER TABLE `center`
  ADD PRIMARY KEY (`centerId`),
  ADD UNIQUE KEY `university` (`university`);

--
-- Indexes for table `consultation`
--
ALTER TABLE `consultation`
  ADD KEY `consultation_ibfk_1` (`monthId`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD KEY `monthId` (`monthId`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fileupload`
--
ALTER TABLE `fileupload`
  ADD PRIMARY KEY (`id`),
  ADD KEY `university_id` (`university_id`);

--
-- Indexes for table `lectures`
--
ALTER TABLE `lectures`
  ADD KEY `monthId` (`monthId`);

--
-- Indexes for table `monthlyreport`
--
ALTER TABLE `monthlyreport`
  ADD PRIMARY KEY (`tableId`);

--
-- Indexes for table `others`
--
ALTER TABLE `others`
  ADD KEY `monthId` (`monthId`);

--
-- Indexes for table `reportable1`
--
ALTER TABLE `reportable1`
  ADD PRIMARY KEY (`reportId`),
  ADD KEY `university` (`university`);

--
-- Indexes for table `universityname`
--
ALTER TABLE `universityname`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploaded_files`
--
ALTER TABLE `uploaded_files`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activites`
--
ALTER TABLE `activites`
  MODIFY `actAutoCounter` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `center`
--
ALTER TABLE `center`
  MODIFY `centerId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fileupload`
--
ALTER TABLE `fileupload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `monthlyreport`
--
ALTER TABLE `monthlyreport`
  MODIFY `tableId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reportable1`
--
ALTER TABLE `reportable1`
  MODIFY `reportId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uploaded_files`
--
ALTER TABLE `uploaded_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activites`
--
ALTER TABLE `activites`
  ADD CONSTRAINT `activites_ibfk_1` FOREIGN KEY (`reportId`) REFERENCES `reportable1` (`reportId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `center`
--
ALTER TABLE `center`
  ADD CONSTRAINT `center_ibfk_1` FOREIGN KEY (`university`) REFERENCES `universityname` (`id`);

--
-- Constraints for table `consultation`
--
ALTER TABLE `consultation`
  ADD CONSTRAINT `consultation_ibfk_1` FOREIGN KEY (`monthId`) REFERENCES `monthlyreport` (`tableId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`monthId`) REFERENCES `monthlyreport` (`tableId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fileupload`
--
ALTER TABLE `fileupload`
  ADD CONSTRAINT `fileupload_ibfk_1` FOREIGN KEY (`university_id`) REFERENCES `universityname` (`id`);

--
-- Constraints for table `lectures`
--
ALTER TABLE `lectures`
  ADD CONSTRAINT `lectures_ibfk_1` FOREIGN KEY (`monthId`) REFERENCES `monthlyreport` (`tableId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `others`
--
ALTER TABLE `others`
  ADD CONSTRAINT `others_ibfk_1` FOREIGN KEY (`monthId`) REFERENCES `monthlyreport` (`tableId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reportable1`
--
ALTER TABLE `reportable1`
  ADD CONSTRAINT `activites_test` FOREIGN KEY (`university`) REFERENCES `universityname` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
