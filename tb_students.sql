
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `db_test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `tb_students`
--

CREATE TABLE IF NOT EXISTS `tb_students` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(250) NOT NULL,
  `lastname` char(250) NOT NULL,
  `gender` char(250) NOT NULL,
  `age` int(11) NOT NULL,
  `group` char(250) NOT NULL,
  `department` char(250) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `tb_students`
--

INSERT INTO `tb_students` (`student_id`, `name`, `lastname`, `gender`, `age`, `group`, `department`) VALUES
(1, 'Lada', 'Marmelada', 'female', 17, 'Gr-64', 'IT'),
(2, 'Max', 'Reva', 'male', 25, 'In-72', 'MehMat'),
(3, 'Kate', 'Shalda', 'female', 25, 'In-72', 'MehMat'),
(4, 'Vanya', 'Ivanov', 'male', 28, 'Gr-32', 'IT'),
(5, 'Yana', 'Naumenko', 'female', 22, 'Gr-11', 'mimimi');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
