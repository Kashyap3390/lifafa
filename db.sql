/* Create admin tabel*/

CREATE TABLE `admin` (
  `id` int(6) NOT NULL,
  `name` varchar(20) NOT NULL,
  `mkey` text(30) NOT NULL,
  `mid` text(30) NOT NULL,
  `guid` text(30) NOT NULL,
  `token` text(20) NOT NULL,
  `charge` int(2) NOT NULL,
  `channel` text(25) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;
 
/* Create users tabel */

CREATE TABLE `users` (
  `id` int(6) NOT NULL,
  `name` text(20) NOT NULL,
  `per_user` int(30) NOT NULL,
  `total_user` int(30) NOT NULL,
  `channel` text(25) NOT NULL,
  `callback` text(25) NOT NULL,
  `amount` text(25) NOT NULL,
  `oid` text(30) NOT NULL,
  `status` text(8) NOT NULL,
  `count` int(4) NOT NULL,
  `info` text(35) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

/* create tabel for member*/

CREATE TABLE `member` (
  `id` int(6) NOT NULL,
  `ip` text(25) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;
 