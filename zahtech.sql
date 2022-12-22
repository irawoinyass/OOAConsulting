-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2022 at 01:37 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zahtech`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `aboutus_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`aboutus_id`, `title`, `desc`, `image`, `created_at`, `updated_at`) VALUES
(1, 'We Exist to Lead the Technology Enablements Services for Driving Business Value.', '<p>Zahtech is an Information Technology company with a mission to provide world class Technology enablements services to our clients with a focus on helping to improve and drive their business goals and objectives.&nbsp;</p>\r\n\r\n<p>Situated in Bramley, Tadley in the UK, we began our journey by providing IT &nbsp;for clients in the UK and Ireland. Today, we are blessed with a resourceful team working remotely from all over the world.</p>\r\n\r\n<p>As a firm, we COLLABORATE together with our clients, to provide quality services to our clients in the UK and Ireland. We provide a host of services which include&nbsp;<br />\r\n- Network Architecture and Engineering,&nbsp;<br />\r\n- Information and Cybersecurity Consulting<br />\r\n- Technology Risk and IT Audit,<br />\r\n- Product, Project &amp; Program Management<br />\r\n- IT Support and Service Management,&nbsp;<br />\r\n- Cloud Migration and Support Services,&nbsp;<br />\r\n- Business Consulting &amp; Technology Enablements,&nbsp;<br />\r\n- AWS Cloud Architecture, System Support, and Security&nbsp;<br />\r\n- GCP Cloud Support and Architecture<br />\r\n- Azure Cloud Systems Support</p>\r\n\r\n<p>Our core values is acting with integrity, driving collaboration and including, appreciating diversity, empathy, providing affordable world class IT services to our clients and improving businesses through our range of Technology enablements services.</p>\r\n\r\n<p><br />\r\nWORK WITH US TODAY</p>', 'https://spbrintvideos.s3.eu-west-1.amazonaws.com/ZAHTECH_PIC/YpwGW43yF84wT1FKbjpitS6gxOhSKtNkHpTRLTKl.png', '2022-03-24 21:03:38', '2022-03-24 23:24:46');

-- --------------------------------------------------------

--
-- Table structure for table `body_top`
--

CREATE TABLE `body_top` (
  `body_top_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_one` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_two` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `body_top`
--

INSERT INTO `body_top` (`body_top_id`, `title`, `short_one`, `short_two`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'WHAT WE OFFER', 'We Exist to Lead the Technology Enablements Services for Driving Business  -', 'Value.', 'Our core values is acting with integrity, driving collaboration and including, appreciating diversity, empathy, providing affordable world class IT services to our clients and improving businesses through our range of Technology enablements services.', NULL, '2022-03-30 15:38:46');

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `careers_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`careers_id`, `title`, `desc`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Lets grow together.', '<p>We&#39;re building a culture at Prunedge where amazing people (like you) can do their best work. If you&#39;re ready to grow your career and help organizations grow their business better, you&#39;re at the right place.</p>\r\n\r\n<h2><strong>Why work with Zahtech</strong></h2>\r\n\r\n<p>When people ask what it&#39;s like to work at Prunedge, you&rsquo;ll usually hear the same few sentiments</p>\r\n\r\n<ul>\r\n	<li><strong>No inner circle.</strong></li>\r\n</ul>\r\n\r\n<p>Being radically transparent helps us all think like founders, and stay focused on solving for our customers.</p>\r\n\r\n<ul>\r\n	<li><strong>We are inclusive.</strong></li>\r\n</ul>\r\n\r\n<p>We&#39;re committed to building a diverse and inclusive environment where you feel you belong.</p>\r\n\r\n<ul>\r\n	<li><strong>Work-life balance</strong></li>\r\n</ul>\r\n\r\n<p>We keep non-traditional hours, and use unlimited vacation to create work-life &quot;fit&quot; for us and the people we love.</p>\r\n\r\n<ul>\r\n	<li><strong>Work autonomously.</strong></li>\r\n</ul>\r\n\r\n<p>You have ownership over work that directly impacts the business. You can move fast, and learn even faster.</p>\r\n\r\n<ul>\r\n	<li><strong>Our culture</strong></li>\r\n</ul>\r\n\r\n<p>We&#39;re building a culture where personal and professional growth are just as important as business growth.</p>', 'https://spbrintvideos.s3.eu-west-1.amazonaws.com/ZAHTECH_PIC/KB6sjTGd71B7VCSbEiZ1rORH9Q358TpqF22Irdj0.jpg', '2021-07-04 16:51:05', '2022-03-24 22:49:45');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `grid`
--

CREATE TABLE `grid` (
  `grid_id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `open_and_close` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bgcolor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_icon` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `grid`
--

INSERT INTO `grid` (`grid_id`, `email`, `phone`, `address`, `open_and_close`, `bgcolor`, `color`, `social_icon`, `created_at`, `updated_at`) VALUES
(1, 'info@zahtech.co.uk', '+44 7470 272804', '2 Consort Dr, Bramley, Tadley RG26 5WH.', 'Monday - Saturday / 8AM - 5PM', '#00A3D8', '#fff', '<li><a href=\"https://www.linkedin.com/company/zahtech/?viewAsMember=true\" onMouseOver=\"this.style.color=\'#FFF\'\" onMouseOut=\"this.style.color=\'#FFF\'\"><i class=\"fa fa-linkedin\"></i></a></li>', '2022-03-06 14:18:42', '2022-03-30 16:56:56');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `info_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_one` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_two` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `years` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`info_id`, `title`, `short_one`, `short_two`, `desc`, `years`, `image`, `created_at`, `updated_at`) VALUES
(1, 'WHO WE ARE', 'A customer-centric Technology Consulting', 'firm.', 'Technology enables newer business models and approaches. At ZAHTECH client and end user satisfaction is at the core of everything we stand for. Businesses today are reliant on technology with seemingly higher expectations. \r\n<br><br>\r\nOur user first approach will help customers evolve from a device-centric strategy to a digitally-enhanced modern workplace. We ensure our customers are secure, productive, connected, maintained and managed. This enables seamless collaboration and office mobility (any device, anywhere, anytime).\r\n<br><br>\r\nOur real-time, data-driven insights and actions will proactively identify and eradicate potential issues. Our workplace teams will help customers to achieve exponential growth by aligning IT and business strategy. ZAHTECH will align people, process and technology to the following core values.', '10+', 'https://spbrintvideos.s3.eu-west-1.amazonaws.com/ZAHTECH_PIC/sBcRRuACilcyDPrudw10tQACPoAxB9sl06NSz733.jpg', NULL, '2022-03-30 16:37:27');

-- --------------------------------------------------------

--
-- Table structure for table `mid_body`
--

CREATE TABLE `mid_body` (
  `mid_body_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mid_body`
--

INSERT INTO `mid_body` (`mid_body_id`, `title`, `desc`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Why choose us', '<p>We offer career planning and development, a system to explore knowledge and skills,digital transformation is driving change, we make it easy for a versatile career opportunity.</p>\r\n\r\n<p>We offer career planning and development, a system to explore knowledge and skills,digital transformation is driving change, we make it easy for a versatile career opportunity. With growth, high wages and multiple career path, We offer opportunities in every sector for professional success.</p>', 'https://spbrintvideos.s3.eu-west-1.amazonaws.com/ZAHTECH_PIC/IZI3bN2T6a7cFacjF6AUfBdLQ2W0S2e97ptzb5JQ.jpg', '2022-03-14 18:46:29', '2022-03-30 16:53:28');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_12_22_114509_create_super_admins_table', 1),
(5, '2021_12_22_134340_create_slides_table', 1),
(6, '2021_12_24_000228_create_testimony_table', 1),
(7, '2022_03_04_154105_create_topper_table', 2),
(8, '2022_03_04_155515_add_desc_to_topper_table', 3),
(9, '2022_03_06_135023_create_grid_table', 4),
(10, '2022_03_10_143624_add_social_icon_to_grid_table', 5),
(11, '2022_03_10_162039_create_nav_table', 6),
(12, '2022_03_10_172106_add_over_and_out_to_nav_table', 7),
(13, '2022_03_11_225725_add_color_to_slides_table', 8),
(14, '2022_03_12_005415_create_body_top_table', 9),
(15, '2022_03_12_180102_create_service_table', 10),
(16, '2022_03_13_170206_create_sub_service_table', 11),
(17, '2022_03_13_232606_create_info_table', 12),
(18, '2022_03_14_183027_create_mid_body_table', 13),
(19, '2022_03_24_205903_create_aboutus_table', 14),
(20, '2022_03_24_215103_create_careers_table', 15),
(21, '2022_03_30_011002_add_bg_to_slides', 16);

-- --------------------------------------------------------

--
-- Table structure for table `nav`
--

CREATE TABLE `nav` (
  `nav_id` int(10) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bgcolor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `over` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `out` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nav`
--

INSERT INTO `nav` (`nav_id`, `logo`, `bgcolor`, `color`, `over`, `out`, `created_at`, `updated_at`) VALUES
(1, 'https://spbrintvideos.s3.eu-west-1.amazonaws.com/ZAHTECH_PIC/5bLqGClOUPAkGZz9Xf3I6mYE8b4FQfavh2R8vDnr.png', '#fff', '#000', '#00A3D8', '#000', NULL, '2022-03-24 23:43:20');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `title`, `image`, `short_desc`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'IT Support and Service Management', 'https://spbrintvideos.s3.eu-west-1.amazonaws.com/ZAHTECH_PIC/usmk3mX3eXCgfbwNMOKw7Lw0ueVcECclm2b8IvxW.jpg', 'We provide a user first customer-centric support services with key focus on service desk, problem management, knowledge management, issues/ incident management and asset management.', '<h3>ITSM (IT Service Management) Includes The Processes And Technology Used To Plan, Deliver, And Support IT Services.</h3>\r\n\r\n<p>We provide a user first customer-centric support services with key focus on service desk, problem management, knowledge management, issues/ incident management and asset management.</p>\r\n\r\n<p>We evaluate and tailor our approaches to your business environment and the best practices in line with ISO 20000 and ITIL Service Value Model.</p>\r\n\r\n<p>Automated process workflow improves collaboration and eliminates many manual tasks. ITSM reduces and streamlines many employee tasks, giving them more time to focus on strategy and customers.</p>\r\n\r\n<p>Information technologies now encompass and incorporate tasks and responsibilities from across the entire organization. Managing these services is an ongoing challenge, and customers expect businesses to be up to the task. Businesses depend on ITSM to effectively coordinate these nearly countless tasks and processes, while ensuring that they are providing real value to the customer.</p>\r\n\r\n<p>Technology is an integral part of IT processes, but it should not necessarily be the primary focus. ITSM is more encompassing, expanding to include business objectives in addition to traditional IT objectives. As a result, IT service management improves efficiencies across the board.</p>', '2022-03-25 15:59:45', '2022-03-30 16:20:19'),
(4, 'Business Consulting', 'https://spbrintvideos.s3.eu-west-1.amazonaws.com/ZAHTECH_PIC/990r0pL4BMm1jkDhP4CNcKY4MtnrmEebYuhxRTOl.jpg', 'We have a proactive team who strives for productivity, organization\'s delivery capability, operations, and will let you know about organizational practices. Clear utility for productivity and effective organizational skills for more values', '<h3>Delivering Solutions To Optimise Business Efficiency And Growth Is At The Core Of Our Services.</h3>\r\n\r\n<p>Our experts will conveniently provide you with this process. We focus on delivering responsive results swiftly. Your trust in our capability to deliver effective results won&rsquo;t be crossed. You&rsquo;ll also have access to being advised corporately about ways to improve in your business model, client or employee relations, or other facets of day-to-day operations.</p>\r\n\r\n<p>Why ZAHTECH?</p>\r\n\r\n<p>Rapid Substitute towards your business growth, lower partner to staff ratio than most and visible superior result is what our Leading team offers.</p>\r\n\r\n<p>Your business needs are what we&rsquo;re working on and we can help you to move forward and identify and implement major transformations efficiently and effortlessly. Talk to us about services offered to key private sector and public sector clients, and how we can support you in progressing and improving your business.</p>', '2022-03-25 16:02:09', '2022-03-30 16:23:31'),
(5, 'Cybersecurity Operations and Support', 'https://spbrintvideos.s3.eu-west-1.amazonaws.com/ZAHTECH_PIC/IAmMDt5SVd1V2FTzMdZ4LeD8wvqedGcAFO9xUq48.jpg', 'Security is at the fore front for most businesses in today\'s world. Evolving business strategies and regulatory\r\nrequirements means that business must be secure against a backdrop of a constantly evolving security threat landscape.', '<h3>Surviving CyberAttacks Starts When You Appropriately Plan To Prevent And Detect Security Threats And Vulnerabilities.</h3>\r\n\r\n<p>Security is at the fore front for most businesses in today&#39;s world. Evolving business strategies, continuous digitisation and regulatory requirements means that business must be secure against a backdrop of a constantly evolving security threat landscape.</p>\r\n\r\n<p>With the threat of cyberattacks / data breaches being a reality to today&#39;s businesses, Zahtech Technology strives to employ appropriate measures for ensuring that business are well protected against today&#39;s most efficient threats.</p>\r\n\r\n<p>We support businesses to proactively build strong ISMS, structure their cybersecurity management program and effectively manage risks to reduce the attack surfaces and provide a comprehensive and decisive response in case of a suspected attack or breach.</p>\r\n\r\n<p>Our team combines technical expertise and understanding of various threat landscape to evaluate vulnerable entry points across people, processes, and technology.</p>', '2022-03-25 16:09:20', '2022-03-30 15:56:49'),
(6, 'Network Engineering', 'https://spbrintvideos.s3.eu-west-1.amazonaws.com/ZAHTECH_PIC/MpBqWy2uaIa9elUfJ0CpZ9bw6zc8TceCDD3DWZiH.jpg', 'Our networking engineering services provide strategy to help you align your investments across communications and networking. We help to achieve digitisation and scalable network architectural goals, in line with your organisation’s objectives.', '<h3>We Are Responsible For Deploying The Computer Technology That Forms The Foundation Of Modern Society.</h3>\r\n\r\n<p>Our networking engineering services provide strategy to help you align your investments across communications and networking. We help to achieve digitisation and scalable network architectural goals, in line with your organisation&rsquo;s objectives.</p>\r\n\r\n<p>Whether we&rsquo;re designing a network from the ground up or expanding an existing network, Zahtech brings an unparalleled level of experience and knowledge to network design and network architecture.</p>\r\n\r\n<p><strong>Network Analysis</strong>&nbsp;&ndash; Our Network Architecture team wields the technical expertise to appropriate evaluate your current network environment against best practices and a tailored approach that suits your business requirement, carefully analysing every aspect of your network environment to uncover opportunities for improvements and optimisation. In this, we leverage well architected frameworks to build for better, faster and cost effective networks.</p>\r\n\r\n<p><strong>Network Support</strong>&nbsp;&ndash; Our support team provides exceptional 24/7 services to different clients with sense of commitments. Our aim is to simplify and automate support services to reduce over reliant on support technicians. We focus on automating basic troubleshooting activities to solve most of the L1 issues while we focus on more technical issues.</p>\r\n\r\n<p><strong>Security Assessment</strong>&nbsp;&ndash; We explore tools to perform comprehensive security assessment of your network environment. This is to detect vulnerabilities and threats that your network assets are exposed to.</p>', '2022-03-25 16:13:34', '2022-03-30 16:05:23'),
(7, 'Cloud Solutions', 'https://spbrintvideos.s3.eu-west-1.amazonaws.com/ZAHTECH_PIC/xNedLGukaQYYxjspnb2NpX9n3tnaYlx9yWqgOwke.png', 'Whether you are at the beginning of your cloud migration journey or an existing cloud consumer looking to optimise and automate your cloud security, Zahtech Cloud Security team can help.', '<h3>Cloud Computing Has Some Fantastic Accessibility And Efficiency Benefits For Today&#39;s Businesses.</h3>\r\n\r\n<p>Leveraging and Navigating cloud solutions to achieve operational efficiency, improved security and cost effectiveness.</p>\r\n\r\n<p>Accessing via the internet means cloud computing can be done anywhere and anytime. With infrastructure and products provided by global market leaders and systems, products, security and support provided by Resolution IT, businesses can take advantage of high-level enterprise IT infrastructure that would never normally be affordable to them for a fixed fee.</p>\r\n\r\n<p>Whether you are at the beginning of your cloud migration journey or an existing cloud consumer looking to optimise and automate your cloud security, Zahtech Cloud Security team can help.</p>', '2022-03-25 16:20:21', '2022-03-25 16:20:21');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `slide_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bgcolor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`slide_id`, `title`, `desc`, `image`, `button_name`, `button_url`, `bgcolor`, `title_color`, `desc_color`, `created_at`, `updated_at`) VALUES
(1, 'We provide measured approaches to solving business issues', 'We cut through most complex business issues with tailored approaches and best practices, giving our customers the edge that positions them as the best in their league', 'https://spbrintvideos.s3.eu-west-1.amazonaws.com/ZAHTECH_PIC/kID6oKZbbjl8I0mEUYXVccUBbbl2rBvwYmgRBO4w.jpg', 'Learn More', '/services/Business%20Consulting', '#000', '#fff', '#fff', '2022-03-11 16:56:44', '2022-03-30 15:15:56'),
(2, 'We transform businesses through technology enablements', 'Zahtech is well positioned to help you drive the needed efficiency to derive optimal business value.', 'https://spbrintvideos.s3.eu-west-1.amazonaws.com/ZAHTECH_PIC/xTf9AriK7sAxaFwfetO4TYkrPjGt9ZUnEQFWzaEN.jpg', 'Read More', '/services/IT%20Support%20and%20Service%20Management', '#000', '#fff', '#fff', '2022-03-11 16:58:52', '2022-03-30 15:09:59'),
(3, 'In-depth knowledge of technology support and service management', 'Our experts have extensive experience to provide technical support services within a  customer centric environment.', 'https://spbrintvideos.s3.eu-west-1.amazonaws.com/ZAHTECH_PIC/qfnnUvESocsJywUtI4Nq2Dp5DjKiYNEDlH0OmfPj.jpg', 'Read More', '/services/Cybersecurity%20Operations%20and%20Support', '#000', '#fff', '#fff', '2022-03-29 17:26:01', '2022-03-30 15:31:17');

-- --------------------------------------------------------

--
-- Table structure for table `sub_service`
--

CREATE TABLE `sub_service` (
  `sub_service_id` int(10) UNSIGNED NOT NULL,
  `s_s_id` int(11) NOT NULL,
  `s_s_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_s_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `super_admins`
--

CREATE TABLE `super_admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `super_admins`
--

INSERT INTO `super_admins` (`id`, `name`, `email`, `user_type`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Lasisi Saheed', 'lasisisaheed5@gmail.com', 'developer', '$2a$12$ZLaCreoBmlXIr5KPehQGDOqRXfCSsKziN2muSIFuPc02bI87c406m', 'AVsNbaElwKYaab2fo2R1Il96OkAP8iKCXTJ5WHOsG8azGUvCLnosExFRDo6Q', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `testimony`
--

CREATE TABLE `testimony` (
  `testimony_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `topper`
--

CREATE TABLE `topper` (
  `topper_id` int(10) UNSIGNED NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'fav.png',
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Custom Site',
  `company_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `topper`
--

INSERT INTO `topper` (`topper_id`, `icon`, `company_name`, `company_desc`, `created_at`, `updated_at`) VALUES
(1, 'https://spbrintvideos.s3.eu-west-1.amazonaws.com/ZAHTECH_PIC/n9cEmlQPEdZoltJN03Gi8IUEgqUA2Hk06K3od75I.png', 'Zahtech Limited', 'Business networking company in Bramley, England', '2022-03-04 15:46:44', '2022-03-24 23:41:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`aboutus_id`);

--
-- Indexes for table `body_top`
--
ALTER TABLE `body_top`
  ADD PRIMARY KEY (`body_top_id`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`careers_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grid`
--
ALTER TABLE `grid`
  ADD PRIMARY KEY (`grid_id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`info_id`);

--
-- Indexes for table `mid_body`
--
ALTER TABLE `mid_body`
  ADD PRIMARY KEY (`mid_body_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nav`
--
ALTER TABLE `nav`
  ADD PRIMARY KEY (`nav_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`slide_id`);

--
-- Indexes for table `sub_service`
--
ALTER TABLE `sub_service`
  ADD PRIMARY KEY (`sub_service_id`);

--
-- Indexes for table `super_admins`
--
ALTER TABLE `super_admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `super_admins_email_unique` (`email`);

--
-- Indexes for table `testimony`
--
ALTER TABLE `testimony`
  ADD PRIMARY KEY (`testimony_id`);

--
-- Indexes for table `topper`
--
ALTER TABLE `topper`
  ADD PRIMARY KEY (`topper_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `aboutus_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `body_top`
--
ALTER TABLE `body_top`
  MODIFY `body_top_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `careers_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `grid`
--
ALTER TABLE `grid`
  MODIFY `grid_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `info_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mid_body`
--
ALTER TABLE `mid_body`
  MODIFY `mid_body_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `nav`
--
ALTER TABLE `nav`
  MODIFY `nav_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `slide_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sub_service`
--
ALTER TABLE `sub_service`
  MODIFY `sub_service_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `super_admins`
--
ALTER TABLE `super_admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimony`
--
ALTER TABLE `testimony`
  MODIFY `testimony_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `topper`
--
ALTER TABLE `topper`
  MODIFY `topper_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
