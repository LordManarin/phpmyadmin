<?php

/* $Id$ */

/**
 * Translated by: Laurent Dhima <laurenti at users.sourceforge.net>
 */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = '.';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Tera, Peta, Exa
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Djl', 'Hën', 'Mar', 'Mër', 'Enj', 'Pre', 'Sht'); //albanian days
$month = array('Jan', 'Shk', 'Mar', 'Pri', 'Maj', 'Qer', 'Kor', 'Gsh', 'Sht', 'Tet', 'Nën', 'Dhj'); //albanian months
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d %B, %Y at %I:%M %p'; //albanian time


$strAccessDenied = 'Hyrja nuk u pranua';
$strAction = 'Aksioni';
$strAddDeleteColumn = 'Shto/Fshi fushën';
$strAddDeleteRow = 'Shto/Fshi kriterin';
$strAddNewField = 'Shto një fushë të re';
$strAddPrivMessage = 'Ke shtuar një privilegj të ri.';
$strAddPriv = 'Shto një privilegj të ri';
$strAddSearchConditions = 'Shto kushte kërkimi (trupi i specifikimit "where"):';
$strAddToIndex = 'Shto tek treguesi i &nbsp;%s&nbsp;kolonës(ave)';
$strAddUserMessage = 'Ke shtuar një përdorues të ri.';
$strAddUser = 'Shto një përdorues të ri';
$strAffectedRows = 'Rrjeshtat e prekur:';
$strAfterInsertBack = 'Mbrapa';
$strAfterInsertNewInsert = 'Shto një record të ri';
$strAfter = 'Mbas %s';
$strAllTableSameWidth = 'vizualizon të gjitha Tabelat me të njëjtën gjërësi?';
$strAll = 'Të gjithë';
$strAlterOrderBy = 'Transformo tabelën e renditur sipas';
$strAnalyzeTable = 'Analizo tabelën';
$strAnd = 'Dhe';
$strAnIndex = 'Një tregues u shtua tek %s';
$strAny = 'Çfarëdo';
$strAnyColumn = 'Çfarëdo kolone';
$strAnyDatabase = 'Çfarëdo database';
$strAnyHost = 'Çfarëdo host';
$strAnyTable = 'Çfarëdo tabelë';
$strAnyUser = 'Çfarëdo përdorues';
$strAPrimaryKey = 'Një kyç primar u shtua tek %s';
$strAscending = 'Ngjitje';
$strAtBeginningOfTable = 'Në fillim të tabelës';
$strAtEndOfTable = 'Në fund të tabelës';
$strAttr = 'Pronësi';

$strBack = 'Mbrapa';
$strBinary = 'Binar';
$strBinaryDoNotEdit = 'Të dhëna të tipit Binar - mos modifiko';
$strBookmarkDeleted = 'Bookmark u fshi.';
$strBookmarkLabel = 'Etiketë';
$strBookmarkQuery = 'Query SQL shtuar të preferuarve';
$strBookmarkThis = 'Shtoja të preferuarve këtë query SQL';
$strBookmarkView = 'Vizualizo vetëm';
$strBrowse = 'Shfaq';
$strBzip = '"kompresuar me bzip2"';

$strCantLoadMySQL = 'nuk arrij të ngarkoj ekstensionin MySQL,<br />kontrollo konfigurimin e PHP.';
$strCantLoadRecodeIconv = 'I pamundur ngarkimi i ekstensionit iconv apo recode të nevoitshëm për konvertimin e karaktereve, konfiguroni php për të lejuar përdorimin e këtyre ekstensioneve ose disaktivoni konvertimin e set të karaktereve në phpMyAdmin.';
$strCantRenameIdxToPrimary = 'I pamundur riemërtimi i treguesit në PRIMAR!';
$strCantUseRecodeIconv = 'I pamundur përdorimi i funksioneve iconv apo libiconv apo recode_string për shkak se ekstensioni duhet të ngarkohet. Kontrolloni konfigurimin e php.';
$strCardinality = '';
$strCarriage = 'Kthimi në fillim: \\r';
$strChangeDisplay = 'Zgjidh fushën që dëshiron të shohësh';
$strChange = 'Modifiko';
$strChangePassword = 'Ndrysho password';
$strCheckAll = 'Seleksionoi të gjithë';
$strCheckDbPriv = 'Kontrollo të drejtat e database';
$strCheckTable = 'Kontrollo tabelën';
$strChoosePage = 'Ju lutem zgjidhni faqen që dëshironi të modifikoni';
$strColComFeat = 'Vizualizimi i Komenteve të Kollonave';
$strColumn = 'Kollona';
$strColumnNames = 'Emrat e kollonave';
$strComments = 'Komente';
$strCompleteInserts = 'Të shtuarat komplet';
$strConfigFileError = 'phpMyAdmin nuk arrin të lexojë file e konfigurimit!<br />Kjo mund të ndodhë kur php gjen një parse error në të apo kur php nuk arrin t\'a gjejë këtë file.<br />Ju lutem ngarkoheni direkt file e konfigurimit duke përdorur link-un e mëposhtëm dhe lexoni mesazhin(et) e gabimeve php që merrni. Në shumicën e rasteve mund t\'ju mungojë një apostrofë apo një presje.<br />Nëse faqja që do t\'ju hapet është bosh (e bardhë), atëhere gjithçka është në rregull.';
$strConfigureTableCoord = 'Ju lutem, konfiguroni koordinatat për tabelën %s';
$strConfirm = 'I sigurt që dëshiron t\'a bësh?';
$strCookiesRequired = 'Nga kjo pikë e tutje, cookies duhet të jenë të aktivuara.';
$strCopyTable = 'Kopjo tabelën tek (database<b>.</b>tabela):';
$strCopyTableOK = 'Tabela %s u kopjua tek %s.';
$strCreateIndex = 'Krijo një tregues tek &nbsp;%s&nbsp;columns';
$strCreateIndexTopic = 'Krijo një tregues të ri';
$strCreate = 'Krijo';
$strCreateNewDatabase = 'Krijo një database të re';
$strCreateNewTable = 'Krijo një tabelë të re tek database %s';
$strCreatePage = 'Krijo një Faqe të re';
$strCreatePdfFeat = 'Krijimi i PDF-ve';
$strCriteria = 'Kriteri';

$strDatabase = 'Database ';
$strDatabaseHasBeenDropped = 'Database %s u eleminua.';
$strDatabases = 'database';
$strDatabasesStats = 'Statistikat e databases';
$strDatabaseWildcard = 'Database (wildcards e lejuara):';
$strDataOnly = 'Vetëm të dhëna';
$strData = 'Të dhëna';
$strDefault = 'Paracaktuar';
$strDeletedRows = 'Rrjeshtat e fshirë:';
$strDeleted = 'Rrjeshti u fshi';
$strDeleteFailed = 'Fshirja dështoi!';
$strDelete = 'Fshi';
$strDeleteUserMessage = 'Ke fshirë përdoruesin %s.';
$strDelPassMessage = 'Ke fshirë password për';
$strDescending = 'Zbritës';
$strDisabled = 'Disaktivuar';
$strDisplayFeat = 'Vizualizo Karakteristikat';
$strDisplayOrder = 'Mënyra e vizualizimit:';
$strDisplayPDF = 'Shfaq skemën e PDF';
$strDisplay = 'Vizualizo';
$strDoAQuery = 'Zbato "query nga shembull" (karakteri jolly: "%")';
$strDocu = 'Dokumentet';
$strDoYouReally = 'Konfermo: ';
$strDropDB = 'Elemino database %s';
$strDrop = 'Elemino';
$strDropTable = 'Elemino tabelën';
$strDumpingData = 'Dump i të dhënave për tabelën';
$strDumpXRows = 'Dump i %s rrjeshta duke filluar nga rrjeshti %s.';
$strDynamic = 'dinamik';

$strEdit = 'Modifiko';
$strEditPDFPages = 'Modifiko Faqe PDF';
$strEditPrivileges = 'Modifiko Privilegjet';
$strEffective = 'Efektiv';
$strEmptyResultSet = 'MySQL ka kthyer një të përbashkët boshe (p.sh. zero rrjeshta).';
$strEmpty = 'Zbraz';
$strEnabled = 'Aktivuar';
$strEnd = 'Fund';
$strEnglishPrivileges = 'Shënim: emrat e privilegjeve të MySQL janë në Anglisht';
$strError = 'Gabim';
$strExport = 'Eksporto';
$strExportToXML = 'Eksporto në formatin XML';
$strExtendedInserts = 'Të shtuara të zgjeruara';
$strExtra = 'Extra';

$strField = 'Fushë';
$strFieldHasBeenDropped = 'Fusha %s u eleminua';
$strFieldsEmpty = ' Numratori i fushave është bosh! ';
$strFieldsEnclosedBy = 'Fushë e përbërë nga';
$strFieldsEscapedBy = 'Fushë e kufizuar nga';
$strFields = 'Fusha';
$strFieldsTerminatedBy = 'Fushë e mbaruar nga';
$strFixed = 'fiks';
$strFlushTable = 'Rifillo ("FLUSH") tabelën';
$strFormat = 'Formati';
$strFormEmpty = 'Mungon një vlerë në form!';
$strFullText = 'Tekst komplet';
$strFunction = 'Funksion';

$strGenBy = 'Gjeneruar nga';
$strGeneralRelationFeat = 'Karakteristikat e Përgjithshme të Relacionit';
$strGenTime = 'Gjeneruar më';
$strGo = 'Zbato';
$strGrants = 'Lejo';
$strGzip = '"kompresuar me gzip"';

$strHasBeenAltered = 'u modifikua.';
$strHasBeenCreated = 'u krijua.';
$strHaveToShow = 'Zgjidh të paktën një Kolonë për t\'a vizualizuar';
$strHome = 'Home';
$strHomepageOfficial = 'Home page zyrtare e phpMyAdmin';
$strHomepageSourceforge = 'Home page e phpMyAdmin tek sourceforge.net';
$strHostEmpty = 'Emri i host është bosh!';
$strHost = 'Host';

$strIdxFulltext = 'Teksti komplet';
$strIfYouWish = 'Për të ngarkuar të dhënat vetëm për disa kollona të tabelës, specifiko listën e fushave (të ndara me presje).';
$strIgnore = 'Injoro';
$strIndexes = 'Tregues';
$strIndexHasBeenDropped = 'Treguesi %s u eleminua';
$strIndexName = 'Emri i treguesit&nbsp;:';
$strIndex = 'Treguesi';
$strIndexType = 'Tipi i treguesit&nbsp;:';
$strInsertAsNewRow = 'Shto një rrjesht të ri';
$strInsertedRows = 'Rrjeshta të shtuar:';
$strInsertNewRow = 'Shto një rrjesht të ri';
$strInsert = 'Shto';
$strInsertTextfiles = 'Shto një file teksti në tabelë';
$strInstructions = 'Instruksione';
$strInUse = 'në përdorim';
$strInvalidName = '"%s" është një fjalë e rezervuar; nuk mund t\'a përdorësh si emër për database/tabelë/fushë.';

$strKeepPass = 'Mos ndrysho password';
$strKeyname = 'Emri kyçit';
$strKill = 'Hiq';

$strLength = 'Gjatësia';
$strLengthSet = 'Gjatësia/Set*';
$strLimitNumRows = 'record për faqe';
$strLineFeed = 'Fundi i rrjeshtit: \\n';
$strLines = 'Record';
$strLinesTerminatedBy = 'Rrjeshta të mbaruar me';
$strLinkNotFound = 'Link nuk u gjet';
$strLinksTo = 'Lidhje me';
$strLocationTextfile = 'Pozicioni i file';
$strLogin = 'Lidh';
$strLogout = 'Shkëput';
$strLogPassword = 'Password:';
$strLogUsername = 'Emri i përdoruesit:';

$strMissingBracket = 'Mungojnë Thonjëza';
$strModifications = 'Ndryshimet u shpëtuan';
$strModifyIndexTopic = 'Modifiko një tregues';
$strModify = 'Modifiko';
$strMoveTableOK = 'Tabela %s u spostua tek %s.';
$strMoveTable = 'Sposto tabelën në (database<b>.</b>tabela):';
$strMySQLCharset = 'Set karakteresh MySQL';
$strMySQLReloaded = 'MySQL u rifillua.';
$strMySQLSaid = 'Mesazh nga MySQL: ';
$strMySQLServerProcess = 'MySQL %pma_s1% në ekzekutim tek %pma_s2% si %pma_s3%';
$strMySQLShowProcess = 'Vizualizo proceset në ekzekutim';
$strMySQLShowStatus = 'Vizualizo informacionet e runtime të MySQL';
$strMySQLShowVars = 'Vizualizo të ndryshueshmet e sistemit të MySQL';

$strName = 'Emri';
$strNext = 'Në vazhdim';
$strNoDatabases = 'Asnjë database';
$strNoDescription = 'asnjë Përshkrim';
$strNoDropDatabases = 'Komandat "DROP DATABASE" janë disaktivuar.';
$strNoFrames = 'phpMyAdmin funksionon më mirë me browser që suportojnë frames';
$strNoIndex = 'Asnjë tregues i përcaktuar!';
$strNoIndexPartsDefined = 'Asnjë pjesë e treguesit është përcaktuar!';
$strNo = ' Jo ';
$strNoModification = 'Asnjë ndryshim';
$strNone = 'Askush';
$strNoPassword = 'Asnjë Password';
$strNoPhp = 'pa kod PHP';
$strNoPrivileges = 'Asnjë Privilegj';
$strNoQuery = 'Asnjë query SQL!';
$strNoRights = 'Nuk ke të drejta të mjaftueshme për të kryer këtë operacion!';
$strNoTablesFound = 'Nuk gjenden tabela në database.';
$strNotNumber = 'Ky nuk është një numër!';
$strNotOK = 'jo OK';
$strNotSet = '<b>%s</b> tabela nuk u gjet ose nuk është përcaktuar tek %s';
$strNotValidNumber = ' nuk është një rrjesht i vlefshëm!';
$strNoUsersFound = 'Nuk u gjet asnjë përdorues.';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s korrispondon(jnë) tek tabela <i>%s</i>';
$strNumSearchResultsTotal = '<b>Gjithsej:</b> <i>%s</i> korrispondues(ë)';

$strOftenQuotation = 'Zakonisht nga dopjo thonjza. ME DËSHIRË tregon që vetëm fushat <I>char</I> dhe <I>varchar</I> duhet të delimitohen nga karakteri i treguar.';
$strOK = 'OK';
$strOperations = 'Operacione';
$strOptimizeTable = 'Optimizo tabelën';
$strOptionalControls = 'Me dëshirë. Ky karakter kontrollon si të shkruash apo lexosh karakteret specialë.';
$strOptionally = 'ME DËSHIRË';
$strOptions = 'Mundësi';
$strOr = 'Ose';
$strOverhead = 'Tejkalim';

$strPageNumber = 'Numri i faqes:';
$strPartialText = 'Tekst i pjesëshëm';
$strPasswordEmpty = 'Password është bosh!';
$strPasswordNotSame = 'Password nuk korrispondon!';
$strPassword = 'Password';
$strPdfDbSchema = 'Skema e database "%s" - Faqja %s';
$strPdfInvalidPageNum = 'Numri i faqes së PDF i papërcaktuar!';
$strPdfInvalidTblName = 'Tabela "%s" nuk ekziston!';
$strPdfNoTables = 'Asnjë Tabelë';
$strPhp = 'Krijo kodin PHP';
$strPHPVersion = 'Versioni i PHP';
$strPmaDocumentation = 'Dokumente të phpMyAdmin';
$strPmaUriError = 'Direktiva <tt>$cfg[\'PmaAbsoluteUri\']</tt> DUHET të përcaktohet tek file i konfigurimit!';
$strPos1 = 'Fillim';
$strPrevious = 'Paraardhësi';
$strPrimaryKeyHasBeenDropped = 'Kyçi primar u eleminua';
$strPrimaryKey = 'Kyç primar';
$strPrimaryKeyName = 'Emri i kyçit primar duhet të jetë... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>duhet</b> të jetë emri i, dhe <b>vetëm i</b>, një kyçi primar!)';
$strPrimary = 'Primar';
$strPrintView = 'Vizualizo për stampim';
$strPrivileges = 'Privilegje';
$strProperties = 'Pronësi';

$strQBEDel = 'Fshi';
$strQBEIns = 'Shto';
$strQBE = 'Query nga shembull';
$strQueryOnDb = 'SQL-query tek database <b>%s</b>:';

$strRecords = 'Record';
$strReferentialIntegrity = 'Kontrollo integritetin e informacioneve:';
$strRelationNotWorking = 'Karakteristikat shtesë janë disaktivuar për sa i takon funksionimit me Tabelat e link-uara. Për të zbuluar përse, klikoni %skëtu%s.';
$strRelationView = 'Shiko relacionin';
$strReloadFailed = 'Rinisja e MySQL dështoi.';
$strReloadMySQL = 'Rifillo MySQL';
$strRememberReload = 'Kujtohu të rinisësh MySQL.';
$strRenameTableOK = 'Tabela %s u riemërtua %s';
$strRenameTable = 'Riemërto tabelën në';
$strRepairTable = 'Riparo tabelën';
$strReplaceTable = 'Zëvëndëso të dhënat e tabelës me file';
$strReplace = 'Zëvëndëso';
$strReset = 'Rinis';
$strReType = 'Rifut';
$strRevokeGrant = 'Hiq të drejtat';
$strRevokeGrantMessage = 'Ke hequr privilegjet e të drejtave për %s';
$strRevoke = 'Hiq';
$strRevokeMessage = 'Ke anulluar privilegjet për %s';
$strRevokePriv = 'Anullo privilegjet';
$strRowLength = 'Gjatësia e rrjeshtit';
$strRowsFrom = 'rrjeshta duke filluar nga';
$strRowSize = 'Dimensioni i rrjeshtit';
$strRowsModeHorizontal = ' horizontal ';
$strRowsModeOptions = ' në modalitetin %s dhe përsërit headers mbas %s qeli ';
$strRowsModeVertical = ' vertikal ';
$strRows = 'Rrjeshta';
$strRowsStatistic = 'Statistikat e rrjeshtave';
$strRunning = 'në ekzekutim tek %s';
$strRunQuery = 'Dërgo Query';
$strRunSQLQuery = 'Zbato query SQL tek database %s';

$strSave = 'Shpëto';
$strScaleFactorSmall = 'Faktori i shkallës është shumë i vogël për të plotësuar skemën në faqe';
$strSearchFormTitle = 'Kërko në database';
$strSearchInTables = 'Tek tabela(at):';
$strSearch = 'Kërko';
$strSearchNeedle = 'Fjala(ë) apo vlera(at) për t\'u kërkuar (karakteri Jolly: "%"):';
$strSearchOption1 = 'të paktën njërën nga fjalët';
$strSearchOption2 = 'të gjitha fjalët';
$strSearchOption3 = 'fraza precize';
$strSearchOption4 = 'si ekspresion i rregullt';
$strSearchResultsFor = 'Kërko rezultatet për "<i>%s</i>" %s:';
$strSearchType = 'Gjej:';
$strSelectADb = 'Të lutem, seleksiono një database';
$strSelectAll = 'Seleksiono Gjithçka';
$strSelectFields = 'Seleksiono fushat (të paktën një):';
$strSelectNumRows = 'tek query';
$strSelect = 'Seleksiono';
$strSelectTables = 'Seleksiono Tabelat';
$strSend = 'Shpëtoje me emër...';
$strServerChoice = 'Zgjedhja e server';
$strServerVersion = 'Versioni i MySQL';
$strSetEnumVal = 'N.q.s. fusha është "enum" apo "set", shtoni të dhënat duke përdorur formatin: \'a\',\'b\',\'c\'...<br />Nëse megjithatë do t\'u duhet të vini backslashes ("\") apo single quote ("\'") para këtyre vlerave, backslash-ojini (për shembull \'\\\\xyz\' o \'a\\\'b\').';
$strShowAll = 'Shfaqi të gjithë';
$strShowColor = 'Shfaq ngjyrën';
$strShowCols = 'Shfaq kollonat';
$strShowGrid = 'Shfaq rrjetën';
$strShowingRecords = 'Vizualizimi i record ';
$strShowPHPInfo = 'Trego info mbi PHP';
$strShow = 'Shfaq';
$strShowTableDimension = 'Trego dimensionin e tabelave';
$strShowTables = 'Shfaq tabelat';
$strShowThisQuery = 'Tregoje përsëri këtë query';
$strSingly = '(një nga një)';
$strSize = 'Dimensioni';
$strSort = 'Rrjeshtimi';
$strSpaceUsage = 'Hapsira e përdorur';
$strSplitWordsWithSpace = 'Fjalët janë të ndara nga një hapsirë (" ").';
$strSQLQuery = 'query SQL';
$strSQLResult = 'Rezultati SQL';
$strSQL = 'SQL';
$strStatement = 'Instruksione';
$strStrucCSV = 'të dhëna CSV';
$strStrucData = 'Struktura dhe të dhëna';
$strStrucDrop = 'Shto \'drop table\'';
$strStrucExcelCSV = 'CSV për të dhëna Ms Excel';
$strStrucOnly = 'Vetëm struktura';
$strStructPropose = 'Propozo strukturën e tabelës';
$strStructure = 'Struktura';
$strSubmit = 'Dërgoje';
$strSuccess = 'Query u zbatua me sukses';
$strSum = 'Gjithsej';

$strTableComments = 'Komente mbi tabelën';
$strTableEmpty = 'Emri i tabelës është bosh!';
$strTableHasBeenDropped = 'Tabela %s u eleminua';
$strTableHasBeenEmptied = 'Tabela %s u zbraz';
$strTableHasBeenFlushed = 'Tabela %s u rifreskua';
$strTableMaintenance = 'Administrimi i tabelës';
$strTables = '%s tabela(at)';
$strTableStructure = 'Struktura e tabelës';
$strTable = 'tabela ';
$strTableType = 'Tipi i tabelës';
$strTextAreaLength = ' Për shkak të gjtësisë saj,<br /> kjo fushë nuk mund të modifikohet ';
$strTheContent = 'Përmbajtja e file u shtua.';
$strTheContents = 'Përmbajtja e file zëvëndëson rrjeshtat e tabelës me të njëjtin kyç primar apo kyç të vetëm.';
$strTheTerminator = 'Karakteri përfundues i fushave.';
$strTotal = 'Gjithsej';
$strType = 'Tipi';

$strUncheckAll = 'Deseleksionoi të gjithë';
$strUnique = 'I vetëm';
$strUnselectAll = 'Deseleksiono Gjithçka';
$strUpdatePrivMessage = 'Ke rifreskuar lejet për %s.';
$strUpdateProfileMessage = 'Profili u rifreskua.';
$strUpdateProfile = 'Rifresko profilin:';
$strUpdateQuery = 'Rifresko Query';
$strUsage = 'Përdorimi';
$strUseBackquotes = 'Përdor backquotes me emrat e tabelave dhe fushave';
$strUserEmpty = 'Emri i përdoruesit është bosh!';
$strUserName = 'Emri i përdoruesit';
$strUser = 'Përdorues';
$strUsers = 'Përdorues';
$strUseTables = 'Përdor tabelat';

$strValue = 'Vlera';
$strViewDumpDB = 'Vizualizo dump (skema) e database';
$strViewDump = 'Vizualizo dump (skema) e tabelës';

$strWelcome = 'Mirësevini tek %s';
$strWithChecked = 'N.q.s.të seleksionuar:';
$strWrongUser = 'Emri i përdoruesit apo password i gabuar. Ndalohet hyrja.';

$strYes = ' Po ';

$strZip = '"kompresuar me zip"';
// To translate


$strBeginCut = 'BEGIN CUT';  //to translate
$strBeginRaw = 'BEGIN RAW';  //to translate

$strCharsetOfFile = 'Character set of the file:'; //to translate

$strEndCut = 'END CUT';  //to translate
$strEndRaw = 'END RAW';  //to translate
$strExplain = 'Explain SQL';  //to translate

$strNoExplain = 'Skip Explain SQL';  //to translate
$strNoValidateSQL = 'Skip Validate SQL';  //to translate

$strSQLParserBugMessage = 'There is a chance that you may have found a bug in the SQL parser. Please examine your query closely, and check that the quotes are correct and not mis-matched. Other possible failure causes may be that you are uploading a file with binary outside of a quoted text area. You can also try your query on the MySQL command line interface. The MySQL server error output below, if there is any, may also help you in diagnosing the problem. If you still have problems or if the parser fails where the command line interface succeeds, please reduce your SQL query input to the single query that causes problems, and submit a bug report with the data chunk in the CUT section below:';  //to translate
$strSQLParserUserError = 'There seems to be an error in your SQL query. The MySQL server error output below, if there is any, may also help you in diagnosing the problem';  //to translate
$strSQPBugInvalidIdentifer = 'Invalid Identifer';  //to translate
$strSQPBugUnclosedQuote = 'Unclosed quote';  //to translate
$strSQPBugUnknownPunctuation = 'Unknown Punctuation String';  //to translate

$strValidateSQL = 'Validate SQL';  //to translate

?>
