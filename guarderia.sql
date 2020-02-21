-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-08-2019 a las 16:37:18
-- Versión del servidor: 10.1.40-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `guarderia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admi`
--

CREATE TABLE `admi` (
  `id` int(11) NOT NULL,
  `user` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `admi`
--

INSERT INTO `admi` (`id`, `user`, `password`) VALUES
(1, 'Mustardseed.christiandaycare@gmail.com', 'cuenta2019*');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curriculum`
--

CREATE TABLE `curriculum` (
  `id` int(11) NOT NULL,
  `curriculum` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `curriculum`
--

INSERT INTO `curriculum` (`id`, `curriculum`) VALUES
(1, 'Our curriculum is designed to support the 6 steps of learning described in our philosophy. The integration of High Scope and our traditional faith based approach to learning provides our children with the benefit of a comprehensive program including activities that are carefully designed using the “plan, do, review” method, Child Observation Record (COR) method for assessment along with the ASQ3 questionnaire, and uniquely with professional development tools for our teachers. Activities are child directed, and teacher supported with approaches to learning that include initiative, engagement, problem solving, and reflection by the students and the teachers individually, as well as within a group.\r\nOur teachers use guided lesson plans to target all areas of development, Early Learning Guidelines, Early Learning Standards, and follow DCFS guidelines for lesson plan requirements. These plans are reviewed by the Director and approved prior to implementation. \r\n\r\nEarly Childhood programs that provide a nurturing environment where children are encouraged to explore their world, to ask questions, and to find answers through experiences that are an invaluable asset to a community. Children who have the opportunity to be cared for in such and environment, who are treated with love and respect, and who are exposed to the love of God develop the positive self-esteem and confidence to enter elementary school with a strong foundation for learning.\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `gradu` text COLLATE utf8_unicode_ci NOT NULL,
  `july` text COLLATE utf8_unicode_ci NOT NULL,
  `dayca` text COLLATE utf8_unicode_ci NOT NULL,
  `pioner` text COLLATE utf8_unicode_ci NOT NULL,
  `progra` text COLLATE utf8_unicode_ci NOT NULL,
  `progra1` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='pioner';

--
-- Volcado de datos para la tabla `events`
--

INSERT INTO `events` (`id`, `gradu`, `july`, `dayca`, `pioner`, `progra`, `progra1`) VALUES
(1, 'The students graduated from PreK and they are ready to start Kindergarten at Rossville Alvin Grade School on August 19, 2019. 1', 'Mustard Seed Christian Daycare was thrilled to be part of the Rossville Community parade on the 4th of July.1', 'The Wacky World of Water is a Vacation Bible School program that takes a fun and engaging look at water with Bible lessons that teach eternal truths, plus great games, crafts and much more. Kids will learn from stories throughout Scripture that include water-from creation, to the flood, to Jesus’ walking on water and calming the storm… and they might even get a little wet along the way!1', 'Developed by Pioneer Clubs, The Wacky World of Water maintains the biblically based standards of Pioneer Clubs.1', 'Collaborative---teaching your children how to work together1', 'Relational---helping kids build relationships with each other, adults and, most importantly, Jesus1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `img` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `gallery`
--

INSERT INTO `gallery` (`id`, `img`) VALUES
(2, '13.jpg'),
(3, '9.jpg'),
(4, '7.jpg'),
(5, '8.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gym`
--

CREATE TABLE `gym` (
  `id` int(11) NOT NULL,
  `a` text COLLATE utf8_unicode_ci NOT NULL,
  `b` text COLLATE utf8_unicode_ci NOT NULL,
  `c` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `gym`
--

INSERT INTO `gym` (`id`, `a`, `b`, `c`) VALUES
(1, 'The Mustard Seed Gym and Community Room are available for rental evenings and on weekends. Rent the gym for family and birthday parties, sports nights or craft fairs. Volleyball net, ping-pong table, a kitchenette and eating space are all available for your use.', '4 Hours ----> $60\r\n\r\n1 day	---->	$100', 'Call Stephen at 217-495-0161 to schedule a rental\r\nThe gym is open to the community for walking from 6.30 a.m. to 8.30 a.m. from October 1, 2019 to May 1, 2020.\r\n\r\n!Donations to keep the gym available to the community are always appreciated!');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `present` text COLLATE utf8_unicode_ci NOT NULL,
  `director` text COLLATE utf8_unicode_ci NOT NULL,
  `mision` text COLLATE utf8_unicode_ci NOT NULL,
  `philo` text COLLATE utf8_unicode_ci NOT NULL,
  `goal` text COLLATE utf8_unicode_ci NOT NULL,
  `goal1` text COLLATE utf8_unicode_ci NOT NULL,
  `goal2` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `home`
--

INSERT INTO `home` (`id`, `present`, `director`, `mision`, `philo`, `goal`, `goal1`, `goal2`) VALUES
(1, 'Mustard Seed Christian Daycare and Preschool is a non-profit organization providing exemplary care and early education to children ages 6 weeks to 12 years.', 'On behalf of Mustard Seed Christian Daycare…Welcome! We are glad that you have chosen our center to care for your child in the early years of their life! We understand that leaving your child in the care of others is a difficult decision, but we want you to feel confident in knowing that your child will be in incredible hands with our amazing staff. Here at Mustard Seed Christian Daycare we want to be partners in raising your child by creating a safe place for them to learn & grow. Communication is very important to us so we encourage parents to discuss any questions or concerns that you may have with your child’s teacher or the director. We are so excited you are here, and we look forward to getting to know your family!  ', 'Our goal is to provide the Rossville community and surrounding areas with quality professional childcare that implements an environment of love, safety, and Christian values.', 'Here at MSCD we believe that each child is a gift from God and is unique. Our goal is to help children learn the special qualities that God has created in them as well as teaching them to understand God’s role in their lives. We believe that all children learn best with hands-on experience at their developmental level. The purpose of Mustard Seed Christian Daycare is to provide a safe, secure, nurturing environment that is centered on Christ and His love for us. We minister to the whole child, which includes physical, social, emotional, cognitive, and spiritual development.\r\nWe believe that a child’s “work” is play, and play is the best way for a child to learn. Throughout your child’s experience here at Mustard Seed Christian Daycare they will learn new concepts, skills, and problem-solving techniques. In addition, they learn how to communicate their thoughts and feelings with words and through play. The activities and materials we provide will give each child an equal opportunity to meet their milestones and be prepared for their future.\r\n', 'To help children develop their relationship with God.', 'To provide developmentally appropriate programs that facilitates the children’s physical, emotional, and spiritual development.', 'To provide parents with encouragement, support, information, and resources concerning family life in an effort to promote Christian values.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `año` text COLLATE utf8_unicode_ci NOT NULL,
  `fecha1` text COLLATE utf8_unicode_ci NOT NULL,
  `fecha2` text COLLATE utf8_unicode_ci NOT NULL,
  `fecha3` text COLLATE utf8_unicode_ci NOT NULL,
  `fecha4` text COLLATE utf8_unicode_ci NOT NULL,
  `fecha5` text COLLATE utf8_unicode_ci NOT NULL,
  `day1` text COLLATE utf8_unicode_ci NOT NULL,
  `day2` text COLLATE utf8_unicode_ci NOT NULL,
  `day3` text COLLATE utf8_unicode_ci NOT NULL,
  `day4` text COLLATE utf8_unicode_ci NOT NULL,
  `day5` text COLLATE utf8_unicode_ci NOT NULL,
  `pdf` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `menu`
--

INSERT INTO `menu` (`id`, `año`, `fecha1`, `fecha2`, `fecha3`, `fecha4`, `fecha5`, `day1`, `day2`, `day3`, `day4`, `day5`, `pdf`) VALUES
(1, 'August 2019', 'August 12', 'August 13', 'August 14', 'August 15', 'August 16', 'B: Strawberry Greek Yogurt, Banana, Skim/Whole Milk\r\n\r\nL: BBQ Pork Steaks, Fruit Cocktail, Corn on the Cob, Whole Grain Bread, Skim/Whole Milk\r\n\r\nS:Creamy Cucumbers, Skim/Whole Milk', 'B: Loaded Scrambled Eggs, Fruit Cocktail, Skim/Whole Milk\r\n\r\nL: Marinated Chicken, Watermelon, Salad, Whole Grain Bread, Skim/Whole Milk\r\n\r\nS: Fritos with Cheese Sauce, Skim/Whole Milk', 'B: Watermelon, Whole Grain Frosted Shredded Wheat, Skim/Whole Milk\r\n\r\nL: Tater Tot Casserole, Pears, Breadsticks, Skim/Whole Milk\r\n\r\nS: Graham Crackers, Skim/Whole Milk', 'B: Pears, Waffles, Skim/Whole Milk\r\n\r\nL: Turkey & Swiss Wrap on Whole Wheat Tortilla, Pineapple, Corn & Tomato Salad, Skim/Whole Milk\r\n\r\nS: Wow Butter, Banana Chips, Ice Water\r\n', 'B: Pineapple, Cornflakes, Skim/Whole Milk\r\n\r\nL: Cheeseburger on Whole Grain Bun, Peaches, Lettuce & Tomato Slices, Skim/Whole Milk\r\n\r\nS: Baby Carrots & Hummus, Apple Juice\r\n', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rates`
--

CREATE TABLE `rates` (
  `id` int(11) NOT NULL,
  `p1` text COLLATE utf8_unicode_ci NOT NULL,
  `p2` text COLLATE utf8_unicode_ci NOT NULL,
  `p3` text COLLATE utf8_unicode_ci NOT NULL,
  `p4` text COLLATE utf8_unicode_ci NOT NULL,
  `p5` text COLLATE utf8_unicode_ci NOT NULL,
  `p6` text COLLATE utf8_unicode_ci NOT NULL,
  `p7` text COLLATE utf8_unicode_ci NOT NULL,
  `p8` text COLLATE utf8_unicode_ci NOT NULL,
  `adic` text COLLATE utf8_unicode_ci NOT NULL,
  `escale` text COLLATE utf8_unicode_ci NOT NULL,
  `escale1` text COLLATE utf8_unicode_ci NOT NULL,
  `reg` text COLLATE utf8_unicode_ci NOT NULL,
  `reg1` text COLLATE utf8_unicode_ci NOT NULL,
  `reg2` text COLLATE utf8_unicode_ci NOT NULL,
  `hour` text COLLATE utf8_unicode_ci NOT NULL,
  `hour1` text COLLATE utf8_unicode_ci NOT NULL,
  `notice` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `rates`
--

INSERT INTO `rates` (`id`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `adic`, `escale`, `escale1`, `reg`, `reg1`, `reg2`, `hour`, `hour1`, `notice`) VALUES
(1, '147', '140', '135', '117', '117', '50', '60', '70', 'A $20 fee will be added to the School Age weekly fee when school is out of session for a full day.', '1 to 5 hours -------	$26/day', '5 to 10 hours-------	$36/day', 'There is a one-time registration fee of $50 per child.', 'Parents enrolling more than one child will receive a 10% discount on their tuition.', 'There is a once year supply fee of $25/child added to each bill at the start of the new calendar.', 'Mustard Seed Christian Daycare is open 52 weeks a year closing only in observance of major holidays or when weather is deemed too dangerous for travel resulting in either a State of Emergency being declared or the closure of Rt. \r\nWe are open Monday through Friday from 6.30 a.m. to 5.30 p.m.', '.', 'If the daycare is closed due to bad weather or building problems we will notify the public using WHPO radio 100.9 FM. Also, we will start calling individual parents as needed, and the 1closing will be posted on WCIA news.\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `profe` text COLLATE utf8_unicode_ci NOT NULL,
  `cargo` text COLLATE utf8_unicode_ci NOT NULL,
  `biblio` text COLLATE utf8_unicode_ci NOT NULL,
  `img` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `staff`
--

INSERT INTO `staff` (`id`, `profe`, `cargo`, `biblio`, `img`) VALUES
(1, 'Nicole Gregory', 'Director', 'Nicole Gregory joined the team at Mustard Seed in December 2010 as the School Age teacher and Early Childhood Teacher Substitute. In March 2011 she took over the position as Director and continues to lead a spectacular team of motivated teachers. She attended Elgin Community College, Illinois State University, and finished her BA program at Kendall College in Chicago, IL. Most recently, Ms. Nicole took the ‘Basic Life Saving’ Instructor’s Course and has taken up Yoga to teach to the children here at MSCD. Nicole is the Mom of two beautiful young women and lives right here in Rossville.', 'Nicole.jpg'),
(2, 'Ms. Terri Bemis', 'Assistant Director and Head Teacher-Infant Room', 'Ms. Terri is our Assistant Director and our Head Teacher in the Infant Room. She has been working for Mustard Seed Christian Daycare since April 2007. She completed her Early Childhood Program at Waubonsee Community College in Sugar Grove, IL. She has three children, a beautiful grand-daughter, and resides here in Rossville.', 'Terri.jpg'),
(3, 'Ms. Debbie Cappellano', 'Teacher Assistant-Infant Room', 'Ms. Debbie joined us in August 2016 after leaving the healthcare field. She works as an Assistant Teacher with Ms. Terri in the Infant Room. Her gentle nature, unwavering smile, and artistic talent are a valued asset in the Infants Room.', 'Debbie.jpg'),
(4, 'Ms. Danielle George', 'Assistant Teacher-Infant Room', 'Ms. Danielle (AKA: the potty training QUEEN) joined us in May of 2017 as an Assistant Teacher in the Twos Room. She now is an Assistant teacher in the Infant room with Ms. Terri & Ms. Debbie while she pursues her degree in Early Childhood Education with a dream of one day becoming a head teacher. Ms. Danielle resides right here in Rossville with her husband and two children.', 'Danielle.jpg'),
(5, 'Ms. Amy Fink', 'Head Teacher-Preschool 1', 'Ms. Amy has been with Mustard Seed since October 2009. After receiving her Associate’s Degree in Early Childhood from Danville Area Community College she has gained several years of experience working in childcare. She currently resides in Hoopeston with her husband and three children. Ms. Amy is loved by all her students, creative, and is not afraid to get a little messy!', 'Amy.jpg'),
(6, 'Mr. Juan Guerrero', 'Assistant Teacher-Toddlers & Twos', 'Mr. “G” has been a part of our team since March of 2018 and currently spends most of his time in the toddler room. His gentle manner and quick wit make him a great asset in this room. Mr. “G’s” experience mentoring Jr. High/High School students and working with individuals with disabilities allows him to understand how to meet children right where they are. He currently resides in Hoopeston with his family.', 'Juan.jpg'),
(7, 'Ms. Amanda Lusk', 'Head Teacher-School Age', 'Ms. Amanda came to us on January 2017 with a degree in sociology and experience working in the Boys and Girls Club program. Her past experience makes her a perfect fit for the school age room because she always has fun activities for her students to partake in. Every time you talk to Ms. Amanda she is always so positive & happy! Ms. Amanda currently resides in Georgetown, IL with her husband and son.', 'Amanda.jpg'),
(8, 'Ms. Kerrie Kuntz', 'Head Teacher-Toddlers & Twos', 'Ms. Kerrie has been with us since 2010. She attended Danville Area Community College where she concentrated on Early Childhood Education. Ms. Kerrie’s sweet smile and go with the flow attitude is a great asset for any Early Childhood setting.<br />\r\n<br />\r\n', 'Kerrie.jpg'),
(9, 'Ms. Dawn McKay', 'Head Teacher-Preschool 2', 'Ms. Dawn joined us in 2014 after relocating from Indiana where she worked in an Early Childhood Facility. Ms. Dawn started her journey at DACC where she studied Early Childhood. Prior to her move to Indiana, she worked at Roselawn in Danville as a preschool teacher and dance instructor. Ms. Dawn is an animal lover, a talented dancer, and a creative teacher. She currently resides in Danville with her family.', 'Dawn.jpg'),
(10, 'Ms. Rylee Glass', 'Assistant Teacher -Toddlers & Twos', 'Ms. Rylee joined us in March of 2018 working in the Two’s room with Ms. Kerri & Mr. “G”. She is a Hoopeston Area High School graduate and plans to continue to expand her education in Early Childhood Education. Outside of work Ms. Rylee loves spending time with her dog, family and friends. Ms. Rylee is extremely eager to learn and is always looking for new ways to meet our students’ needs. Ms. Rylee is a great asset to our team, and we cannot wait to watch her grow as she continues to learn more about Early Childhood Education.', 'Rylee.jpg'),
(11, 'Ms. Amanda Williams', 'Kitchen Manager', 'Ms. Amanda joined us in July 2015 with several years of experience providing healthy whole food meals to large groups. She has a kind heart, is organized, and a wonderful cook! She loves hiking and she also is an essential oil fanatic! Ms. Amanda currently resides in Rossville with her son.', 'Williams.jpg'),
(12, 'Ms. Macie Myler', 'Substitute Teacher', 'Ms. Macie just recently joined us in July of 2019 after graduating from Eastern Illinois University with a Bachelor’s in Family and Consumer Science. She’s a kind person, good listener, and loves working here at Mustard seed. We are very excited to have her as a part of our team!', 'Macie.jpg'),
(13, 'Ms. Madison Ray', 'Assistant Teacher-Preschool 2', 'Ms. Madison joined our team in May 2019. She is currently attending Danville Area Community College pursuing an Associate’s Degree in Early Childhood Education. She enjoys working at Mustard Seed Christian Daycare because of the welcoming environment amongst staff, students and parents. Outside of work she loves playing with her dog and spending time with her friends! Ms. Madison’s outgoing personality is very contagious throughout our center & we are very thankful to have her on our team!.', 'Maddison.jpg'),
(14, 'Ms. Karley Weaver', 'Substitute Teacher', 'Ms. Karley just recently joined our team as a Substitute Teacher this past July 2019. She is currently pursuing a bachelor’s degree in Elementary Education at Illinois State University. Outside of work, Ms. Karley enjoys spending time with family and shopping. She currently resides in Catlin, IL.', 'Karley.jpg'),
(15, 'Ms. Loreal Luukkonen', 'Kitchen Assistant', 'Ms. Loreal joined us in December of 2018. She has had years of experience of being a nanny for kids of all ages. She has a kind heart, sarcastic demeanor, and is always ready to listen. She loves reading books and sketching. Ms. Loreal and her son currently reside in Rossville', 'Loreal.jpg'),
(16, 'Ms. Shelby Cushman', 'Assistant Teacher-Preschool 1', 'Ms. Shelby joined us in January of 2019. She moved here from West Lebanon, Indiana where she was working as an Assistant Teacher for 1st grade. She loves art and enjoys the creative minds of the kiddos at our center. Ms. Shelby is always willing to take a leadership role to make our students her number one priority.', 'Shelby.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admi`
--
ALTER TABLE `admi`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `curriculum`
--
ALTER TABLE `curriculum`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `gym`
--
ALTER TABLE `gym`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rates`
--
ALTER TABLE `rates`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admi`
--
ALTER TABLE `admi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `curriculum`
--
ALTER TABLE `curriculum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `gym`
--
ALTER TABLE `gym`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `rates`
--
ALTER TABLE `rates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
