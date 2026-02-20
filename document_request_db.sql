-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2026 at 02:35 PM
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
-- Database: `document_request_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_number` varchar(20) DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `approvals`
--

CREATE TABLE `approvals` (
  `approval_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `request_id` int(11) NOT NULL,
  `action` enum('Approved','Rejected') NOT NULL,
  `remarks` text DEFAULT NULL,
  `action_date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `document_id` int(11) NOT NULL,
  `request_id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_path` varchar(500) NOT NULL,
  `uploaded_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `etarp_requests`
--

CREATE TABLE `etarp_requests` (
  `request_id` int(11) NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `id_number` varchar(50) DEFAULT NULL,
  `designation` varchar(100) DEFAULT NULL,
  `department` varchar(100) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `event_name` varchar(255) DEFAULT NULL,
  `dimension` varchar(100) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `layout` varchar(20) DEFAULT NULL,
  `design_pref` text DEFAULT NULL,
  `slogan` text DEFAULT NULL,
  `supporting_doc` varchar(255) DEFAULT NULL,
  `reference_doc` varchar(255) DEFAULT NULL,
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `etarp_requests`
--

INSERT INTO `etarp_requests` (`request_id`, `full_name`, `id_number`, `designation`, `department`, `mobile`, `email`, `event_name`, `dimension`, `start_date`, `end_date`, `layout`, `design_pref`, `slogan`, `supporting_doc`, `reference_doc`, `submitted_at`) VALUES
(1, 'Donjie J. Castino', '202350542', 'Instructor', 'CCIS', '09238923424', 'pepitojasmine5@gmail.com', 'Nurtrition Month', '3ft by 5ft', '2026-02-26', '2026-02-20', 'portrait', NULL, 'Avengers Assemble', '', '', '2026-02-19 14:53:48'),
(2, 'Donjie J. Castino', '202350542', 'Instructor', 'CCIS', '09238923424', 'pepitojasmine5@gmail.com', 'Nurtrition Month', '3ft by 5ft', '2026-02-26', '2026-02-20', 'portrait', 'red blue piink ', 'Avengers Assemble', '', '', '2026-02-19 14:54:57');

-- --------------------------------------------------------

--
-- Table structure for table `id_replacement_requests`
--

CREATE TABLE `id_replacement_requests` (
  `request_id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `grade_level` varchar(100) DEFAULT NULL,
  `department` varchar(100) DEFAULT NULL,
  `designation` varchar(100) DEFAULT NULL,
  `id_number` varchar(50) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `reason` varchar(50) DEFAULT NULL,
  `info_to_change` varchar(100) DEFAULT NULL,
  `new_info_value` varchar(255) DEFAULT NULL,
  `other_reason` varchar(255) DEFAULT NULL,
  `mobile_number` varchar(20) DEFAULT NULL,
  `school_email` varchar(255) DEFAULT NULL,
  `payment_date` date DEFAULT NULL,
  `affidavit_file` varchar(255) DEFAULT NULL,
  `damage_file` varchar(255) DEFAULT NULL,
  `receipt_file` varchar(255) DEFAULT NULL,
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `id_replacement_requests`
--

INSERT INTO `id_replacement_requests` (`request_id`, `full_name`, `grade_level`, `department`, `designation`, `id_number`, `dob`, `reason`, `info_to_change`, `new_info_value`, `other_reason`, `mobile_number`, `school_email`, `payment_date`, `affidavit_file`, `damage_file`, `receipt_file`, `submitted_at`) VALUES
(1, 'Castino, Donjie, Jamodiong', 'Grade 12 STEM', 'shs', '', '202350542', '2003-12-05', 'Change of Info', 'Name', 'Castino, Donjie Jamodiong', '', '09232342342', 'donjie@smccnasipit.edu.ph', '2026-02-19', NULL, NULL, NULL, '2026-02-19 16:11:19'),
(2, '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '0000-00-00', NULL, NULL, NULL, '2026-02-20 12:24:26');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `notification_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `status` enum('Read','Unread') DEFAULT 'Unread',
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`notification_id`, `user_id`, `message`, `status`, `created_at`) VALUES
(1, 2, 'Your document request (#7) is submitted and pending review.', 'Unread', '2026-02-19 22:18:11'),
(2, 4, 'Your document request (#8) is submitted and pending review.', 'Unread', '2026-02-19 22:23:16'),
(3, 2, 'Your document request (#9) is submitted and pending review.', 'Unread', '2026-02-19 22:31:55'),
(4, 2, 'Your document request (#10) is submitted and pending review.', 'Unread', '2026-02-19 22:33:03'),
(5, 6, 'Your document request (#11) is submitted and pending review.', 'Unread', '2026-02-19 23:47:31');

-- --------------------------------------------------------

--
-- Table structure for table `refund_requests`
--

CREATE TABLE `refund_requests` (
  `refund_id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `grade_level` varchar(100) DEFAULT NULL,
  `student_id` varchar(50) DEFAULT NULL,
  `contact_number` varchar(20) DEFAULT NULL,
  `refund_type` varchar(150) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `semester` varchar(150) DEFAULT NULL,
  `request_date` date DEFAULT NULL,
  `statement_file` varchar(255) DEFAULT NULL,
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `refund_requests`
--

INSERT INTO `refund_requests` (`refund_id`, `full_name`, `grade_level`, `student_id`, `contact_number`, `refund_type`, `amount`, `semester`, `request_date`, `statement_file`, `submitted_at`) VALUES
(1, 'Donjie J. Castino', 'Grade 12 STEM', '202350542', '09763526356', 'miscellaneous', 2000.00, '1st Sem', '2026-02-20', NULL, '2026-02-19 16:46:52'),
(2, '', '', '', '', '', 0.00, '', '0000-00-00', NULL, '2026-02-20 12:24:22');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `request_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `request_type` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `status` enum('Pending','Approved','Rejected') DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`request_id`, `user_id`, `request_type`, `description`, `status`) VALUES
(3, 1, '', 'secret', 'Pending'),
(4, 1, 'Transcript of records', 'secret', 'Pending'),
(5, 1, 'Transcript of records', 'secrets', 'Pending'),
(7, 2, 'Transcript of records', '', 'Pending'),
(8, 4, 'Transcript of records', 'secrets', 'Pending'),
(9, 2, 'Transcript of records', 'secrets', 'Pending'),
(10, 2, 'Transcript of records', 'secretss', 'Pending'),
(11, 6, 'secrets', 'secret', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `summary_reports`
--

CREATE TABLE `summary_reports` (
  `report_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `generated_date` datetime DEFAULT current_timestamp(),
  `total_requests` int(11) DEFAULT 0,
  `approved_requests` int(11) DEFAULT 0,
  `rejected_requests` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_number` varchar(20) DEFAULT NULL,
  `id_number` varchar(50) DEFAULT NULL,
  `role` enum('Student','Personnel','Cashier','AdminAssistant') NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `full_name`, `email`, `contact_number`, `id_number`, `role`, `password`) VALUES
(1, 'test user', 'test@smccnasipit.edu.ph', '0912345656', NULL, 'Student', 'test123'),
(2, 'Donjie J. Castino', 'donjie_castino@smccnasipit.edu.ph', '09277326632', NULL, 'Student', '$2y$10$Yk9wSZOyDArSRGjwvUp8lO7mLAV.uuLF6dFbTYjOc3YX8R85duwpi'),
(4, 'Donjie J. Castino', 'donjie_casino@smccnasipit.edu.ph', '09277326632', '202350541', 'Student', '$2y$10$9AvH1NS/tLb5AcEcFf.JPu1YnsQq4M2GJecdcQnbnBLc0hpKOFSvy'),
(6, 'Donjie J. Castino', 'donjie@smccnasipit.edu.ph', '0923832932', '202350542', 'Student', '$2y$10$dcToejMFV0Ly1faUNJyNT./gd8fFnUiLFtSIJxJJJAoLFLIs0VmMW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `approvals`
--
ALTER TABLE `approvals`
  ADD PRIMARY KEY (`approval_id`),
  ADD KEY `fk_approvals_admin` (`admin_id`),
  ADD KEY `fk_approvals_request` (`request_id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`document_id`),
  ADD KEY `fk_documents_request` (`request_id`);

--
-- Indexes for table `etarp_requests`
--
ALTER TABLE `etarp_requests`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `id_replacement_requests`
--
ALTER TABLE `id_replacement_requests`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`notification_id`),
  ADD KEY `fk_notifications_user` (`user_id`);

--
-- Indexes for table `refund_requests`
--
ALTER TABLE `refund_requests`
  ADD PRIMARY KEY (`refund_id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`request_id`),
  ADD KEY `fk_requests_user` (`user_id`);

--
-- Indexes for table `summary_reports`
--
ALTER TABLE `summary_reports`
  ADD PRIMARY KEY (`report_id`),
  ADD KEY `fk_summary_reports_admin` (`admin_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `approvals`
--
ALTER TABLE `approvals`
  MODIFY `approval_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `document_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `etarp_requests`
--
ALTER TABLE `etarp_requests`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `id_replacement_requests`
--
ALTER TABLE `id_replacement_requests`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `refund_requests`
--
ALTER TABLE `refund_requests`
  MODIFY `refund_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `summary_reports`
--
ALTER TABLE `summary_reports`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `approvals`
--
ALTER TABLE `approvals`
  ADD CONSTRAINT `fk_approvals_admin` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`admin_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_approvals_request` FOREIGN KEY (`request_id`) REFERENCES `requests` (`request_id`) ON DELETE CASCADE;

--
-- Constraints for table `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `fk_documents_request` FOREIGN KEY (`request_id`) REFERENCES `requests` (`request_id`) ON DELETE CASCADE;

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `fk_notifications_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `requests`
--
ALTER TABLE `requests`
  ADD CONSTRAINT `fk_requests_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `summary_reports`
--
ALTER TABLE `summary_reports`
  ADD CONSTRAINT `fk_summary_reports_admin` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`admin_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
