<?php

/* $Id$ */

/**
 * Latvian language file by Sandis J�rics <sandisj at parks.lv>
 */

$charset = 'windows-1257';
$text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Tera, Peta, Exa
$byteUnits = array('baiti', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Sv', 'Pr', 'Ot', 'Tr', 'Ce', 'Pt', 'Se');
$month = array('Jan', 'Feb', 'Mar', 'Apr', 'Mai', 'J�n', 'J�l', 'Aug', 'Sep', 'Okt', 'Nov', 'Dec');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d%m.%Y %H:%M';


$strAccessDenied = 'Pieeja aizliegta';
$strAction = 'Darb�ba';
$strAddDeleteColumn = 'Pievienot/Dz�st laukus (kolonnas)';
$strAddDeleteRow = 'Pievienot/Dz�st ierakstu';
$strAddNewField = 'Pievienot jaunu lauku';
$strAddPrivMessage = 'J�s pievienoj�t jaunu privil��iju.';
$strAddPriv = 'Pievienot jaunu privil��iju';
$strAddSearchConditions = 'Pievienot mekl��anas nosac�jumus ("where" izteiksmes �ermenis):';
$strAddToIndex = 'Pievienot indeksam &nbsp;%s&nbsp;kolonn(u/as)';
$strAddUserMessage = 'J�s pievienoj�t jaunu lietot�ju.';
$strAddUser = 'Pievienot jaunu lietot�ju';
$strAffectedRows = 'Ietekm�to rindu skaits:';
$strAfterInsertBack = 'Atgriezties iepriek��j� lap� atpaka�';
$strAfterInsertNewInsert = 'Ievietot v�l vienu rindu';
$strAfter = 'P�c %s';
$strAll = 'Visi';
$strAlterOrderBy = 'Main�t datu k�rto�anas laukus';
$strAnalyzeTable = 'Analiz�t tabulu';
$strAnd = 'Un';
$strAnIndex = 'Indekss tieka pievienots uz %s';
$strAnyColumn = 'Jebkura kolonna';
$strAnyDatabase = 'Jebkura datub�ze';
$strAnyHost = 'Jebkur� hosts';
$strAny = 'Jebkur�';
$strAnyTable = 'Jebkura tabula';
$strAnyUser = 'Jebkur� lietot�js';
$strAPrimaryKey = 'Prim�r� atsl�ga pievienota uz lauka %s';
$strAscending = 'Augo�� sec�b�';
$strAtBeginningOfTable = 'Tabulas s�kum�';
$strAtEndOfTable = 'Tabulas beig�s';
$strAttr = 'Atrib�ti';

$strBack = 'Atpaka�';
$strBinary = 'Bin�rais';
$strBinaryDoNotEdit = 'Bin�rais - netiek labots';
$strBookmarkDeleted = 'Ieraksts tika dz�sts.';
$strBookmarkLabel = 'Nosaukums';
$strBookmarkQuery = 'Saglab�tie SQL-vaic�jumi';
$strBookmarkThis = 'Saglab�t �o SQL-vaic�jumu';
$strBookmarkView = 'Tikai apskat�t';
$strBrowse = 'Apskat�t';
$strBzip = 'saarhiv�ts ar bzip';

$strCantLoadMySQL = 'nevar iel�d�t MySQL papla�in�jumu,<br />l�dzu p�rbaudiet PHP konfigur�ciju.';
$strCantRenameIdxToPrimary = 'Nevar p�rsaukt indeksu par PRIMARY!';
$strCardinality = 'Kardinalit�te';
$strCarriage = 'Rindas nobeiguma simbols: \\r';
$strChange = 'Labot';
$strChangePassword = 'Main�t paroli';
$strCheckAll = 'Iez�m�t visu';
$strCheckDbPriv = 'P�rbaud�t privil��ijas uz datub�zi';
$strCheckTable = 'P�rbaud�t tabulu';
$strColumn = 'Kolonna';
$strColumnNames = 'Kolonnu nosaukumi';
$strCompleteInserts = 'Pilnas INSERT izteiksmes';
$strConfirm = 'Vai J�s tie��m gribat to dar�t?';
$strCookiesRequired = '�� lapa nestr�d�s korekti, ja \'Cookies\' ir atsl�gtas j�su p�rl�kprogrammas konfigur�cij�.';
$strCopyTable = 'Kop�t tabulu uz (datub�ze<b>.</b>tabula):';
$strCopyTableOK = 'Tabula %s tika p�rkop�ta uz %s.';
$strCreateIndex = 'Izveidot indeksu uz&nbsp;%s&nbsp;laukiem';
$strCreateIndexTopic = 'Izveidot jaunu indeksu';
$strCreate = 'Izveidot';
$strCreateNewDatabase = 'Izveidot jaunu datub�zi';
$strCreateNewTable = 'Izveidot jaunu tabulu datub�z� %s';
$strCriteria = 'Krit�rijs';

$strDatabase = 'Datub�ze ';
$strDatabaseHasBeenDropped = 'Datub�ze %s tika izdz�sta.';
$strDatabases = 'datub�zes';
$strDatabasesStats = 'Datub�zu statistika';
$strDatabaseWildcard = 'Datub�ze (var lietot aizst�j�jz�mes):';
$strData = 'Dati';
$strDataOnly = 'Tikai dati';
$strDefault = 'Noklus�ts';
$strDeleted = 'Ieraksts tika dz�sts';
$strDeletedRows = 'Ieraksti dz�sti:';
$strDelete = 'Dz�st';
$strDeleteFailed = 'Dz��ana nenotika!';
$strDeleteUserMessage = 'J�s nodz�s�t lietot�ju %s.';
$strDescending = 'Dilsto�� sec�b�';
$strDisplay = 'Att�lot';
$strDisplayOrder = 'Att�lo�anas sec�ba:';
$strDoAQuery = 'Izpild�t "vaic�jumu p�c parauga" (aizst�j�jz�me: "%")';
$strDocu = 'Dokument�cija';
$strDoYouReally = 'Vai J�s tie��m gribat ';
$strDropDB = 'Likvid�t datub�zi %s';
$strDrop = 'Likvid�t';
$strDropTable = 'Likvid�t tabulu';
$strDumpingData = 'Dati tabulai';
$strDynamic = 'dinamisks';

$strEdit = 'Labot';
$strEditPrivileges = 'Main�t privil��ijas';
$strEffective = 'Efekt�vs';
$strEmpty = 'Iztuk�ot';
$strEmptyResultSet = 'MySQL atgrieza tuk�o rezult�tu (0 rindas).';
$strEnd = 'Beigas';
$strEnglishPrivileges = ' Piez�me: MySQL privil��iju apz�m�jumi tiek rakst�ti ang�u valod� ';
$strError = 'K��da';
$strExtendedInserts = 'Papla�in�t�s INSERT izteiksmes';
$strExtra = 'Ekstras';

$strFieldHasBeenDropped = 'Lauks %s tika izdz�sts';
$strField = 'Lauks';
$strFieldsEmpty = ' Lauku skaits ir nulle! ';
$strFieldsEnclosedBy = 'Lauki iek�auti iek�';
$strFieldsEscapedBy = 'Gl�bjo�� (escape) rakstz�me ir';
$strFields = 'Lauku skaits';
$strFieldsTerminatedBy = 'Lauki atdal�ti ar';
$strFixed = 'fiks�ts';
$strFlushTable = 'Atsvaidzin�t tabulu ("FLUSH")';
$strFormat = 'Formats';
$strFormEmpty = 'Form� tr�kst v�rt�bu!';
$strFullText = 'Pilni teksti';
$strFunction = 'Funkcija';

$strGenTime = 'Izveido�anas laiks';
$strGo = 'Aiziet!';
$strGrants = 'Ties�bas';
$strGzip = 'saarhiv�ts ar gzip';

$strHasBeenAltered = 'tika modific�ta.';
$strHasBeenCreated = 'tika izveidota.';
$strHomepageOfficial = 'Ofici�l� phpMyAdmin m�jaslapa';
$strHomepageSourceforge = 'phpMyAdmin lejupl�des lapa iek� Sourceforge';
$strHome = 'S�kumlapa';
$strHostEmpty = 'Hosts nav nor�d�ts!';
$strHost = 'Hosts';

$strIdxFulltext = 'Pilni teksti';
$strIfYouWish = 'Ja J�s v�laties iel�d�t tikai da�as tabulas kolonnas, nor�diet to nosaukumus, atdalot tos ar komatu.';
$strIgnore = 'Ignor�t';
$strIndexes = 'Indeksi';
$strIndexHasBeenDropped = 'Indekss %s tika izdz�sts';
$strIndex = 'Indekss';
$strIndexName = 'Indeksa nosaukums&nbsp;:';
$strIndexType = 'Indeksa tips&nbsp;:';
$strInsertAsNewRow = 'Ievietot k� jaunu rindu';
$strInsertedRows = 'Rindas pievienotas:';
$strInsertNewRow = 'Pievienot jaunu rindu';
$strInsert = 'Pievienot';
$strInsertTextfiles = 'Ievietot tabul� datus no teksta faila';
$strInstructions = 'Instrukcijas';
$strInUse = 'lieto�an�';
$strInvalidName = '"%s" ir rezerv�ts v�rds, J�s nevarat lietot to k� datub�zes/tabulas/lauka nosaukumu.';

$strKeepPass = 'Nemain�t paroli';
$strKeyname = 'Atsl�gas nosaukums';
$strKill = 'Nogalin�t';

$strLength = 'Garums';
$strLengthSet = 'Garums/V�rt�bas*';
$strLimitNumRows = 'Rindu skaits vien� lap�';
$strLineFeed = 'Rindas beigu simbols: \\n';
$strLines = 'Rindas';
$strLinesTerminatedBy = 'Rindas atdal�tas ar';
$strLocationTextfile = 'Teksta faila atra�an�s vieta';
$strLogin = 'Ieiet';
$strLogout = 'Iziet';
$strLogPassword = 'Parole:';
$strLogUsername = 'Lietot�jv�rds:';

$strModifications = 'Groz�jumi tika saglab�ti';
$strModifyIndexTopic = 'Modific�t indeksu';
$strModify = 'Modific�t';
$strMoveTableOK = 'Tabula %s tika p�rvietota uz %s.';
$strMoveTable = 'P�rvietot tabulu uz (datub�ze<b>.</b>tabula):';
$strMySQLReloaded = 'MySQL serveris tika p�rl�d�ts.';
$strMySQLSaid = 'MySQL teica: ';
$strMySQLServerProcess = 'MySQL %pma_s1% str�d� uz %pma_s2% k� %pma_s3%';
$strMySQLShowProcess = 'Par�d�t procesus';
$strMySQLShowStatus = 'Par�d�t MySQL izpildes laika inform�ciju';
$strMySQLShowVars = 'Par�d�t MySQL sist�mas main�gos';

$strName = 'Nosaukums';
$strNext = 'N�kamais';
$strNoDatabases = 'Nav datub�zu';
$strNoDropDatabases = '"DROP DATABASE" komanda ir aizliegta.';
$strNoFrames = 'phpMyAdmin ir vair�k draudz�gs <b>freimu atbalsto�u</b> p�rl�kprogrammu.';
$strNoIndex = 'Nav defin�ti indeksi!';
$strNoIndexPartsDefined = 'Nav defin�to indeksa da�u!';
$strNoModification = 'Netika labots';
$strNo = 'N�';
$strNone = 'Nekas';
$strNoPassword = 'Nav paroles';
$strNoPrivileges = 'Nav privil��iju';
$strNoQuery = 'Nav SQL vaic�juma!';
$strNoRights = 'Jums nav pietieko�i ties�bu, lai atrastos �eit tagad!';
$strNoTablesFound = 'Tabulas nav atrastas �aj� datub�z�.';
$strNotNumber = 'Tas nav numurs!';
$strNotValidNumber = ' nav der�gs lauku skaits!';
$strNoUsersFound = 'Lietot�ji netika atrasti.';
$strNull = 'Nulle';

$strOftenQuotation = 'Parasti p�di�as. NEOBLIG�TS noz�m�, ka tikai \'char\' un \'varchar\' tipa lauki tiek norobe�oti ar �o simbolu.';
$strOptimizeTable = 'Optimiz�t tabulu';
$strOptionalControls = 'Neoblig�ts. Nosaka, k� rakst�t vai las�t speci�l�s rakstz�mes.';
$strOptionally = 'NEOBLIG�TS';
$strOr = 'Vai';
$strOverhead = 'P�rt�ri��';

$strPartialText = 'Da��ji teksti';
$strPasswordEmpty = 'Parole nav nor�d�ta!';
$strPasswordNotSame = 'Paroles nesakr�t!';
$strPassword = 'Parole';
$strPHPVersion = 'PHP Versija';
$strPmaDocumentation = 'phpMyAdmin dokument�cija';
$strPmaUriError = '<tt>$cfg[\'PmaAbsoluteUri\']</tt> direkt�vai ir J�B�T nodefin�tai J�su konfigur�cijas fail�!';
$strPos1 = 'S�kums';
$strPrevious = 'Iepriek��jie';
$strPrimaryKeyHasBeenDropped = 'Prim�r� atsl�ga tika izdz�sta';
$strPrimaryKeyName = 'Prim�r�s atsl�gas nosaukumam j�b�t... PRIMARY!';
$strPrimaryKey = 'Prim�r� atsl�ga';
$strPrimaryKeyWarning = '("PRIMARY" <b>j�b�t</b> tikai un <b>vien�gi</b> prim�r�s atsl�gas indeksa nosaukumam!)';
$strPrimary = 'Prim�r�';
$strPrintView = 'Izdrukas versija';
$strPrivileges = 'Privil��ijas';
$strProperties = '�pa��bas';

$strQBEDel = 'Dz�st';
$strQBEIns = 'Ielikt';
$strQBE = 'Vaic�jums p�c parauga';
$strQueryOnDb = 'SQL-vaic�jums uz datub�zes <b>%s</b>:';

$strRecords = 'Ieraksti';
$strReferentialIntegrity = 'P�rbaud�t referenci�lo integrit�ti:';
$strReloadFailed = 'Nesan�ca p�rl�d�t MySQL serveri.';
$strReloadMySQL = 'P�rl�d�t MySQL serveri';
$strRememberReload = 'Neaizmirstiet p�rl�d�t serveri.';
$strRenameTableOK = 'Tabula %s tika p�rsaukta par %s';
$strRenameTable = 'P�rsaukt tabulu uz';
$strRepairTable = 'Restaur�t tabulu';
$strReplace = 'Aizvietot';
$strReplaceTable = 'Aizvietot tabulas datus ar datiem no faila';
$strReset = 'Atcelt';
$strReType = 'Atk�rtojiet';
$strRevoke = 'Atsaukt';
$strRevokeGrant = 'At�emt \'Grant\' ties�bas';
$strRevokeGrantMessage = 'J�s at��m�t \'Grant\' ties�bas lietot�jam %s';
$strRevokeMessage = 'J�s at��m�t privil�gijas lietot�jam %s';
$strRevokePriv = 'At�emt privil��ijas';
$strRowLength = 'Rindas garums';
$strRowsFrom = 'rindas s�kot no';
$strRowSize = ' Rindas izm�rs ';
$strRowsModeHorizontal = 'horizont�l�';
$strRowsModeOptions = '%s skat� un atk�rtot virsrakstus ik p�c %s rind�m';
$strRowsModeVertical = 'vertik�l�';
$strRows = 'Rindas';
$strRowsStatistic = 'Rindas statistika';
$strRunning = 'atrodas uz %s';
$strRunQuery = 'Izpild�t vaic�jumu';
$strRunSQLQuery = 'Izpild�t SQL-vaic�jumu(s) uz datub�zes %s';

$strSave = 'Saglab�t';
$strSelectADb = 'L�dzu izv�lieties datub�zi';
$strSelectAll = 'Iez�m�t visu';
$strSelect = 'Atlas�t';
$strSelectFields = 'Izv�lieties laukus (kaut vienu):';
$strSelectNumRows = 'vaic�jum�';
$strSend = 'Saglab�t k� failu';
$strServerChoice = 'Servera izv�le';
$strServerVersion = 'Servera versija';
$strSetEnumVal = 'Ja lauka tips ir "enum" vai "set", l�dzu ievadiet v�rt�bas atbilsto�i �im formatam: \'a\',\'b\',\'c\'...<br />Ja Jums vajag ielikt atpaka��jo sl�psv�tru (\) vai vienk�r�o p�di�u (\') k�d� no ��m v�rt�b�m, lieciet t�s priek�� atpaka��jo sl�psv�tru (piem�ram, \'\\\\xyz\' vai \'a\\\'b\').';
$strShowAll = 'R�d�t visu';
$strShowCols = 'R�d�t kolonnas';
$strShowingRecords = 'Par�du rindas';
$strShowPHPInfo = 'Par�d�t PHP inform�ciju';
$strShow = 'R�d�t';
$strShowTables = 'R�d�t tabulas';
$strShowThisQuery = ' R�d�t �o vaic�jumu �eit atkal ';
$strSingly = '(vienk�r�i)';
$strSize = 'Izm�rs';
$strSort = 'K�rto�ana';
$strSpaceUsage = 'Diska vietas lieto�ana';
$strSQLQuery = 'SQL-vaic�jums';
$strStatement = 'Parametrs';
$strStrucCSV = 'CSV dati';
$strStrucData = 'Strukt�ra un dati';
$strStrucDrop = 'Pievienot tabulu dz��anas komandas';
$strStrucExcelCSV = 'CSV dati MS Excel form�t�';
$strStrucOnly = 'Tikai strukt�ra';
$strSubmit = 'Nos�t�t';
$strSuccess = 'J�su SQL-vaic�jums tika veiksm�gi izpild�ts';
$strSum = 'Kopum�';

$strTableComments = 'Koment�rs tabulai';
$strTableEmpty = 'Tabulas nosaukums nav nor�d�ts!';
$strTableHasBeenDropped = 'Tabula %s tika izdz�sta';
$strTableHasBeenEmptied = 'Tabula %s tika iztuk�ota';
$strTableHasBeenFlushed = 'Tabula %s tika atsvaidzin�ta';
$strTableMaintenance = 'Tabulas apkalpo�ana';
$strTables = '%s tabula(s)';
$strTableStructure = 'Tabulas strukt�ra tabulai';
$strTable = 'Tabula ';
$strTableType = 'Tabulas tips';
$strTextAreaLength = ' Sava garuma d��,<br /> �is lauks var b�t neredi��jams ';
$strTheContent = 'J�su faila saturs tika ievietots.';
$strTheContents = 'Faila saturs aizvieto izv�l�t�s tabulas saturu rindi��m ar identisko prim�r�s vai unik�l�s atsl�gas v�rt�bu.';
$strTheTerminator = 'Lauku atdal�t�js.';
$strTotal = 'kop�';
$strType = 'Tips';

$strUncheckAll = 'Neiez�m�t neko';
$strUnique = 'Unik�lais';
$strUnselectAll = 'Neiez�m�t neko';
$strUpdatePrivMessage = 'J�s modific�j�t privil��ijas objektam %s.';
$strUpdateProfileMessage = 'Profils tika modific�ts.';
$strUpdateProfile = 'Modific�t profilu:';
$strUpdateQuery = 'Modific��anas vaic�jums';
$strUsage = 'Aiz�em';
$strUseBackquotes = 'Lietot apostrofa simbolu [`] tabulu un lauku nosaukumiem';
$strUserEmpty = 'Lietot�ja v�rds nav nor�d�ts!';
$strUser = 'Lietot�js';
$strUserName = 'Lietot�jv�rds';
$strUsers = 'Lietot�ji';
$strUseTables = 'Lietot tabulas';

$strValue = 'V�rt�ba';
$strViewDump = 'Apskat�t tabulas dampu (sh�mu)';
$strViewDumpDB = 'Apskat�t datub�zes dampu (sh�mu)';

$strWelcome = 'Laipni l�gti %s';
$strWithChecked = 'Ar iez�m�to:';
$strWrongUser = 'K��dains lietot�jv�rds/parole. Pieeja aizliegta.';

$strYes = 'J�';

$strZip = 'arhiv�ts ar zip';
// To translate


$strAllTableSameWidth = 'display all Tables with same width?';  //to translate

$strBeginCut = 'BEGIN CUT';  //to translate
$strBeginRaw = 'BEGIN RAW';  //to translate

$strCantLoadRecodeIconv = 'Can not load iconv or recode extension needed for charset conversion, configure php to allow using these extensions or disable charset conversion in phpMyAdmin.';  //to translate
$strCantUseRecodeIconv = 'Can not use iconv nor libiconv nor recode_string function while extension reports to be loaded. Check your php configuration.';  //to translate
$strChangeDisplay = 'Choose Field to display';  //to translate
$strCharsetOfFile = 'Character set of the file:'; //to translate
$strChoosePage = 'Please choose a Page to edit';  //to translate
$strColComFeat = 'Displaying Column Comments';  //to translate
$strComments = 'Comments';  //to translate
$strConfigFileError = 'phpMyAdmin was unable to read your configuration file!<br />This might happen if php finds a parse error in it or php cannot find the file.<br />Please call the configuration file directly using the link below and read the php error message(s) that you recieve. In most cases a quote or a semicolon is missing somewhere.<br />If you recieve a blank page, everything is fine.'; //to translate
$strConfigureTableCoord = 'Please configure the coordinates for table %s';  //to translate
$strCreatePage = 'Create a new Page';  //to translate
$strCreatePdfFeat = 'Creation of PDFs';  //to translate

$strDisabled = 'Disabled';  //to translate
$strDisplayFeat = 'Display Features';  //to translate
$strDisplayPDF = 'Display PDF schema';  //to translate
$strDumpXRows = 'Dump %s rows starting at row %s.'; //to translate

$strEditPDFPages = 'Edit PDF Pages';  //to translate
$strEnabled = 'Enabled';  //to translate
$strEndCut = 'END CUT';  //to translate
$strEndRaw = 'END RAW';  //to translate
$strExplain = 'Explain SQL';  //to translate
$strExport = 'Export';  //to translate
$strExportToXML = 'Export to XML format'; //to translate

$strGenBy = 'Generated by'; //to translate
$strGeneralRelationFeat = 'General relation features';  //to translate

$strHaveToShow = 'You have to choose at least one Column to display';  //to translate

$strLinkNotFound = 'Link not found';  //to translate
$strLinksTo = 'Links to';  //to translate

$strMissingBracket = 'Missing Bracket';  //to translate
$strMySQLCharset = 'MySQL Charset';  //to translate

$strNoDescription = 'no Description';  //to translate
$strNoExplain = 'Skip Explain SQL';  //to translate
$strNoPhp = 'without PHP Code';  //to translate
$strNotOK = 'not OK';  //to translate
$strNotSet = '<b>%s</b> table not found or not set in %s';  //to translate
$strNoValidateSQL = 'Skip Validate SQL';  //to translate
$strNumSearchResultsInTable = '%s match(es) inside table <i>%s</i>';//to translate
$strNumSearchResultsTotal = '<b>Total:</b> <i>%s</i> match(es)';//to translate

$strOK = 'OK';  //to translate
$strOperations = 'Operations';  //to translate
$strOptions = 'Options';  //to translate

$strPageNumber = 'Page number:';  //to translate
$strPdfDbSchema = 'Schema of the the "%s" database - Page %s';  //to translate
$strPdfInvalidPageNum = 'Undefined PDF page number!';  //to translate
$strPdfInvalidTblName = 'The "%s" table does not exist!';  //to translate
$strPdfNoTables = 'No tables';  //to translate
$strPhp = 'Create PHP Code';  //to translate

$strRelationNotWorking = 'The additional Features for working with linked Tables have been deactivated. To find out why click %shere%s.';  //to translate
$strRelationView = 'Relation view';  //to translate

$strScaleFactorSmall = 'The scale factor is too small to fit the schema on one page';  //to translate
$strSearchFormTitle = 'Search in database';//to translate
$strSearchInTables = 'Inside table(s):';//to translate
$strSearchNeedle = 'Word(s) or value(s) to search for (wildcard: "%"):';//to translate
$strSearchOption1 = 'at least one of the words';//to translate
$strSearchOption2 = 'all words';//to translate
$strSearchOption3 = 'the exact phrase';//to translate
$strSearchOption4 = 'as regular expression';//to translate
$strSearchResultsFor = 'Search results for "<i>%s</i>" %s:';//to translate
$strSearch = 'Search';//to translate
$strSearchType = 'Find:';//to translate
$strSelectTables = 'Select Tables';  //to translate
$strShowColor = 'Show color';  //to translate
$strShowGrid = 'Show grid';  //to translate
$strShowTableDimension = 'Show dimension of tables';  //to translate
$strSplitWordsWithSpace = 'Words are seperated by a space character (" ").';//to translate
$strSQLParserBugMessage = 'There is a chance that you may have found a bug in the SQL parser. Please examine your query closely, and check that the quotes are correct and not mis-matched. Other possible failure causes may be that you are uploading a file with binary outside of a quoted text area. You can also try your query on the MySQL command line interface. The MySQL server error output below, if there is any, may also help you in diagnosing the problem. If you still have problems or if the parser fails where the command line interface succeeds, please reduce your SQL query input to the single query that causes problems, and submit a bug report with the data chunk in the CUT section below:';  //to translate
$strSQLParserUserError = 'There seems to be an error in your SQL query. The MySQL server error output below, if there is any, may also help you in diagnosing the problem';  //to translate
$strSQLResult = 'SQL result'; //to translate
$strSQL = 'SQL'; //to translate
$strSQPBugInvalidIdentifer = 'Invalid Identifer';  //to translate
$strSQPBugUnclosedQuote = 'Unclosed quote';  //to translate
$strSQPBugUnknownPunctuation = 'Unknown Punctuation String';  //to translate
$strStructPropose = 'Propose table structure';  //to translate
$strStructure = 'Structure';  //to translate

$strValidateSQL = 'Validate SQL';  //to translate

?>
