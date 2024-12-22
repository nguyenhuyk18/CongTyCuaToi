/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MariaDB
 Source Server Version : 100137
 Source Host           : localhost:3306
 Source Schema         : company

 Target Server Type    : MariaDB
 Target Server Version : 100137
 File Encoding         : 65001

 Date: 12/07/2022 16:15:40
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for departments
-- ----------------------------
DROP TABLE IF EXISTS `departments`;
CREATE TABLE `departments`  (
  `department_id` int(11) NOT NULL AUTO_INCREMENT,
  `department_name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`department_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of departments
-- ----------------------------
INSERT INTO `departments` VALUES (1, 'Administration');
INSERT INTO `departments` VALUES (2, 'Marketing');
INSERT INTO `departments` VALUES (3, 'Purchasing');
INSERT INTO `departments` VALUES (4, 'Human Resources');
INSERT INTO `departments` VALUES (5, 'Shipping');
INSERT INTO `departments` VALUES (6, 'IT');
INSERT INTO `departments` VALUES (7, 'Public Relations');
INSERT INTO `departments` VALUES (8, 'Sales');
INSERT INTO `departments` VALUES (9, 'Executive');
INSERT INTO `departments` VALUES (10, 'Finance');
INSERT INTO `departments` VALUES (11, 'Accounting');

-- ----------------------------
-- Table structure for employees
-- ----------------------------
DROP TABLE IF EXISTS `employees`;
CREATE TABLE `employees`  (
  `employee_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `last_name` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phone_number` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `hire_date` date NOT NULL,
  `salary` decimal(8, 2) NOT NULL,
  `department_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`employee_id`) USING BTREE,
  INDEX `employees_ibfk_1`(`department_id`) USING BTREE,
  CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `departments` (`department_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 207 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of employees
-- ----------------------------
INSERT INTO `employees` VALUES (100, 'Steven', 'King', 'steven.king@sqltutorial.org', '515.123.4567', '1987-06-17', 24000.00, 9);
INSERT INTO `employees` VALUES (101, 'Neena', 'Kochhar', 'neena.kochhar@sqltutorial.org', '515.123.4568', '1989-09-21', 17000.00, 9);
INSERT INTO `employees` VALUES (102, 'Lex', 'De Haan', 'lex.de haan@sqltutorial.org', '515.123.4569', '1993-01-13', 17000.00, 9);
INSERT INTO `employees` VALUES (103, 'Alexander', 'Hunold', 'alexander.hunold@sqltutorial.org', '590.423.4567', '1990-01-03', 9000.00, 6);
INSERT INTO `employees` VALUES (104, 'Bruce', 'Ernst', 'bruce.ernst@sqltutorial.org', '590.423.4568', '1991-05-21', 6000.00, 6);
INSERT INTO `employees` VALUES (105, 'David', 'Austin', 'david.austin@sqltutorial.org', '590.423.4569', '1997-06-25', 4800.00, 6);
INSERT INTO `employees` VALUES (106, 'Valli', 'Pataballa', 'valli.pataballa@sqltutorial.org', '590.423.4560', '1998-02-05', 4800.00, 6);
INSERT INTO `employees` VALUES (107, 'Diana', 'Lorentz', 'diana.lorentz@sqltutorial.org', '590.423.5567', '1999-02-07', 4200.00, 6);
INSERT INTO `employees` VALUES (108, 'Nancy', 'Greenberg', 'nancy.greenberg@sqltutorial.org', '515.124.4569', '1994-08-17', 12000.00, 10);
INSERT INTO `employees` VALUES (109, 'Daniel', 'Faviet', 'daniel.faviet@sqltutorial.org', '515.124.4169', '1994-08-16', 9000.00, 10);
INSERT INTO `employees` VALUES (110, 'John', 'Chen', 'john.chen@sqltutorial.org', '515.124.4269', '1997-09-28', 8200.00, 10);
INSERT INTO `employees` VALUES (111, 'Ismael', 'Sciarra', 'ismael.sciarra@sqltutorial.org', '515.124.4369', '1997-09-30', 7700.00, 10);
INSERT INTO `employees` VALUES (112, 'Jose Manuel', 'Urman', 'jose manuel.urman@sqltutorial.org', '515.124.4469', '1998-03-07', 7800.00, 10);
INSERT INTO `employees` VALUES (113, 'Luis', 'Popp', 'luis.popp@sqltutorial.org', '515.124.4567', '1999-12-07', 6900.00, 10);
INSERT INTO `employees` VALUES (114, 'Den', 'Raphaely', 'den.raphaely@sqltutorial.org', '515.127.4561', '1994-12-07', 11000.00, 3);
INSERT INTO `employees` VALUES (115, 'Alexander', 'Khoo', 'alexander.khoo@sqltutorial.org', '515.127.4562', '1995-05-18', 3100.00, 3);
INSERT INTO `employees` VALUES (116, 'Shelli', 'Baida', 'shelli.baida@sqltutorial.org', '515.127.4563', '1997-12-24', 2900.00, 3);
INSERT INTO `employees` VALUES (117, 'Sigal', 'Tobias', 'sigal.tobias@sqltutorial.org', '515.127.4564', '1997-07-24', 2800.00, 3);
INSERT INTO `employees` VALUES (118, 'Guy', 'Himuro', 'guy.himuro@sqltutorial.org', '515.127.4565', '1998-11-15', 2600.00, 3);
INSERT INTO `employees` VALUES (119, 'Karen', 'Colmenares', 'karen.colmenares@sqltutorial.org', '515.127.4566', '1999-08-10', 2500.00, 3);
INSERT INTO `employees` VALUES (120, 'Matthew', 'Weiss', 'matthew.weiss@sqltutorial.org', '650.123.1234', '1996-07-18', 8000.00, 5);
INSERT INTO `employees` VALUES (121, 'Adam', 'Fripp', 'adam.fripp@sqltutorial.org', '650.123.2234', '1997-04-10', 8200.00, 5);
INSERT INTO `employees` VALUES (122, 'Payam', 'Kaufling', 'payam.kaufling@sqltutorial.org', '650.123.3234', '1995-05-01', 7900.00, 5);
INSERT INTO `employees` VALUES (123, 'Shanta', 'Vollman', 'shanta.vollman@sqltutorial.org', '650.123.4234', '1997-10-10', 6500.00, 5);
INSERT INTO `employees` VALUES (126, 'Irene', 'Mikkilineni', 'irene.mikkilineni@sqltutorial.org', '650.124.1224', '1998-09-28', 2700.00, 5);
INSERT INTO `employees` VALUES (145, 'John', 'Russell', 'john.russell@sqltutorial.org', NULL, '1996-10-01', 14000.00, 8);
INSERT INTO `employees` VALUES (146, 'Karen', 'Partners', 'karen.partners@sqltutorial.org', NULL, '1997-01-05', 13500.00, 8);
INSERT INTO `employees` VALUES (176, 'Jonathon', 'Taylor', 'jonathon.taylor@sqltutorial.org', NULL, '1998-03-24', 8600.00, 8);
INSERT INTO `employees` VALUES (177, 'Jack', 'Livingston', 'jack.livingston@sqltutorial.org', NULL, '1998-04-23', 8400.00, 8);
INSERT INTO `employees` VALUES (178, 'Kimberely', 'Grant', 'kimberely.grant@sqltutorial.org', NULL, '1999-05-24', 7000.00, 8);
INSERT INTO `employees` VALUES (179, 'Charles', 'Johnson', 'charles.johnson@sqltutorial.org', NULL, '2000-01-04', 6200.00, 8);
INSERT INTO `employees` VALUES (192, 'Sarah', 'Bell', 'sarah.bell@sqltutorial.org', '650.501.1876', '1996-02-04', 4000.00, 5);
INSERT INTO `employees` VALUES (193, 'Britney', 'Everett', 'britney.everett@sqltutorial.org', '650.501.2876', '1997-03-03', 3900.00, 5);
INSERT INTO `employees` VALUES (200, 'Jennifer', 'Whalen', 'jennifer.whalen@sqltutorial.org', '515.123.4444', '1987-09-17', 4400.00, 1);
INSERT INTO `employees` VALUES (201, 'Michael', 'Hartstein', 'michael.hartstein@sqltutorial.org', '515.123.5555', '1996-02-17', 13000.00, 2);
INSERT INTO `employees` VALUES (202, 'Pat', 'Fay', 'pat.fay@sqltutorial.org', '603.123.6666', '1997-08-17', 6000.00, 2);
INSERT INTO `employees` VALUES (203, 'Susan', 'Mavris', 'susan.mavris@sqltutorial.org', '515.123.7777', '1994-06-07', 6500.00, 4);
INSERT INTO `employees` VALUES (204, 'Hermann', 'Baer', 'hermann.baer@sqltutorial.org', '515.123.8888', '1994-06-07', 10000.00, 7);
INSERT INTO `employees` VALUES (205, 'Shelley', 'Higgins', 'shelley.higgins@sqltutorial.org', '515.123.8080', '1994-06-07', 12000.00, 11);
INSERT INTO `employees` VALUES (206, 'William', 'Gietz', 'william.gietz@sqltutorial.org', '515.123.8181', '1994-06-07', 8300.00, 11);

SET FOREIGN_KEY_CHECKS = 1;
