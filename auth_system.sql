-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 12 2022 г., 23:09
-- Версия сервера: 5.6.43-log
-- Версия PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `auth_system`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `_group` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `password`, `date_of_birth`, `_group`) VALUES
(5, 'test3@test', 'test', '$2y$10$WaBgOUBjKdx4p3e23sEk5.dFJKUHdtTEdhKsCmtTD1h9HZcePDJ3S', '2022-05-28', 2),
(9, 'test5@test', 'test5', '$2y$10$9qgsihk7KZJeTgSmKbs5.esUDIoCRmUSVKARWdyu1RXuosiMAwawW', '2022-05-03', 1),
(10, 'test6@test', 'test666', '$2y$10$b8pki50NZWK0WGcMIaGiGepotPHyaZEhlXPmiMAEejiItjUaCCbiS', '2022-05-02', 1),
(11, 'test10@gmail.com', 'test10', '$2y$10$mj7WprpDWrVCO98ykgy56.bOL06cW65sLp.tNrOTDxT3Ini2oGKgy', '2022-04-28', 1),
(12, 'malikovsyjmyk@gmail.com', 'simon', '$2y$10$HhEKpGm0fXXrfgspT2CbR.iHW0zlwUBk6aKgRZM8vSrh5OMt2fJCC', '2022-05-05', 1),
(13, 'test11@test', 'test11', '$2y$10$xH/FpxKnz1Ds5Nwye4Vi2.OBsmq/JrKpkpaDOmzLqCdvJlzjlsRVS', '2022-05-06', 1),
(14, 'test12@test12', 'test12', '$2y$10$HyQ.aA5fcaMPp/S7c9TFRurqf7HnFvGuZ4fJq9x930g9sa/BN0wcO', '2022-05-12', 1),
(15, 'test13@test', 'test13', '$2y$10$1rLEEdZgKxwGRVhTiRA89.wkv0qa9GvsggLodFKrejIROKLZFMtDq', '2022-05-12', 1),
(16, 'test14@test', 'test14', '$2y$10$NnsK7HZDfgYWgKAFwb0AHutL4/b98/Bjcq6Ahr6ZN/w9whz6E/a4O', '2022-05-12', 1),
(17, 'test15@test', 'test15', '$2y$10$ZV9ElLOMyZnLBGQoo3QEvuXM.4huAzxWYz1wnOoTdgo08zqq1wx0K', '2022-05-15', 1),
(18, 'test16@test', 'test16', '$2y$10$t7ymbr.VZqslr5mrSJpWjOurjt/Y65xFVF8XkdA1Wcfv0Gt4HUk8e', '2022-05-16', 1),
(19, 'test17@test', 'test17', '$2y$10$QuacRQU6vRshvr0ND9K1cOUPWsQmWW.5HL6ewoFQArEqIsOZxc71a', '2022-05-17', 1),
(20, 'test18@test', 'test18', '$2y$10$N8fyyKjITvmv/lwQT5P4ruvHsra0X83q2ty7twgltAQAG31aYkDT2', '2022-05-13', 1),
(21, 'test20@test', 'test20', '$2y$10$bvflr5Krh5Zi0ELx1S1IYOpAiMjadelNp/Z1/oHOz212ToIqAYLbW', '2022-05-13', 1),
(22, 'test21@test', 'test21', '$2y$10$T9eaRdmVyKt4EVfqFcU1ZuFs6jcdPrVLnnpyd8CFghbd5Ap8U0V3.', '2022-05-13', 1),
(23, 'test22@test', 'test22', '$2y$10$gXg7H8qexPe2oUEcOykrYu8y144ODZOZzsJrYkjagIhFUeQcPcubi', '2022-05-13', 1),
(24, 'test23@test', 'test23', '$2y$10$HWg5Y65ebsQ4Ec5YrFvWUe57Omg/DC70RnuhQjuE010XosiRrbSPm', '2022-05-12', 1),
(25, 'aasd@asd', 'asd', '$2y$10$6Vo4uceRXI/0.W/46LcIVeAdW6vNJ6XSSRHYDwokvcy9F0Xaf3S9.', '2022-05-21', 1),
(26, 'malikovsyjmyk@gmail.com', 'test', '$2y$10$azDth3Cy5ROR/zQQyuHbausX8MpGmOGZwPUNf3QT1L7zu6Wmqd13i', '2022-04-30', 1),
(27, 'malikovsyjmyk@gmail.com', '1231', '$2y$10$QfmGZOjh3d3zziiyHdPUTuutFx0kR.29cUm8fwhr9UKWcZHZZ51fO', '2022-05-15', 1),
(28, 'test35@gmail.com', 'test30', '$2y$10$COkteHXDv0qDs/nDdES/fekDOv/n5JFIDiN/JupBH4GIJCM1UjjIi', '2022-04-29', 1),
(29, 'test31@gmail.com', 'test31', '$2y$10$.FuZ8QNdqvjGUI/0rJ9aNeWcxjP5A1ApUzvHafrtjw1qACG/p1UOK', '2022-05-15', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
