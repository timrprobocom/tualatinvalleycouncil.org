DROP TABLE dates;
CREATE TABLE dates (
    date DATE UNIQUE NOT NULL PRIMARY KEY,
    theme TEXT,
    talent TEXT,
    location TEXT,
    time TEXT,
    flyer TEXT
);

INSERT INTO dates VALUES
(
'2016-12-31','New Year''s Eve Dance',
'Daryl Clendenin calling, Yvonne Clendein cuing',
'IOOF Hall, Hillsboro',
'9:00 PM',
''
);
INSERT INTO dates VALUES 
(
'2017-03-05','Special Dance',
'Gary Shoemake calling, Yvonne Clendenin cuing',
'Sunset Presbyterian Church, Portland',
'2:00 PM',
''
);
INSERT INTO dates VALUES (
'2017-04-29','Spring Fling Dance',
'Mike Stout calling, Julie Stout cuing',
'TBD',
'7:30 PM',
''
);
INSERT INTO dates VALUES (
'2017-08-28','Hahn Barn Dance -- Dance cancelled due to heat',
'Jeanniene Alexander calling, Mark McDonald cuing',
'Hahn Barn',
'6:00 PM',
''
);
INSERT INTO dates VALUES (
'2018-03-31','Spring Fling',
'Jeanniene Alexander calling, Mark McDonald cuing',
'Kinton Grange ',
'7:30 PM',
''
);
INSERT INTO dates VALUES (
'2018-06-30','Mainstream to Advanced',
'Scott Zinser calling, Jeanine Norden cuing',
'Aloha Grange',
'7:30 PM',
''
);
INSERT INTO dates VALUES (
'2018-08-12','Hahn Barn Dance',
'Jim Hattrick calling, Connie Clark cuing',
'Hahn Barn',
'5:30 PM',
''
);
INSERT INTO dates VALUES (
'2018-12-31','New Year''s Eve Dance',
'Darrell Kalmbach calling, Randy Lewis cuing',
'Hillsboro IOOF Hall',
'9:00 PM',
''
);
INSERT INTO dates VALUES (
'2019-03-30','Spring Fling Dance',
'Randy Dibble calling, Jeanine Norden cuing',
'Hillsboro IOOF Hall',
'7:30 PM',
'http://ofn.club/content/2019-03/tua-tua68-10985fbb16e79509459866312e3238dc.jpeg'
);
INSERT INTO dates VALUES (
'2019-05-19','Alzheimers Benefit Dance',
'Dan Nordbye Caller MC, Julie Stiers Cuer MC',
'Oak Grove Community Club',
'2:00 to 5:00 PM',
'https://ofn.club/content/2019-05/por-por40-1b1592f296757d2ddbda1852b7d9914d.pdf'
);
INSERT INTO dates VALUES (
'June 29, 2019','Hahn Barn Dance',
'Scott Zinser calling, Ken Pratt cuing',
'Hahn Barn, Banks',
'6:00 to 9:00 PM',
'https://ofn.club/content/2019-06/tua-tua68-ea9583fd9e13236e96e1bff88f41c49b.jpeg'
);
