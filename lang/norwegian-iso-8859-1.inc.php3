<?php

/* $Id$ */

/**
 * Translated by Sven-Erik Andersen <sven_erik at andersen.as>
 */

$charset = 'iso-8859-1';
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = '.';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Tera, Peta, Exa
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('S�n', 'Man', 'Tir', 'Ons', 'Tor', 'Fre', 'L�r');
$month = array('Jan', 'Feb', 'Mar', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Des');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d. %B, %Y klokka %H:%M %p';


$strAccessDenied = 'Ingen tilgang';
$strAction = 'Handling';
$strAddDeleteColumn = 'Legg til/Slett kolonne';
$strAddDeleteRow = 'Legg til/Slett kriterie rad';
$strAddNewField = 'Legg til felt';
$strAddPriv = 'Legg til nytt privilegie';
$strAddPrivMessage = 'Du har lagt til ett nytt privilegie.';
$strAddSearchConditions = 'Legg til s�ke-kriterier (innhold i "where"-setningen):';
$strAddToIndex = 'Legg til indeks &nbsp;%s&nbsp;kolonne(r)';
$strAddUser = 'Legg til en ny bruker';
$strAddUserMessage = 'Du har lagt til en ny bruker.';
$strAffectedRows = 'Ber�rte rader:';
$strAfter = 'Etter %s';
$strAfterInsertBack = 'Returner';
$strAfterInsertNewInsert = 'Sett inn en ny post';
$strAll = 'Alle';
$strAllTableSameWidth = 'vis alle tabeller med samme bredde?';
$strAlterOrderBy = 'Endre tabell rekkef�lge ved';
$strAnalyzeTable = 'Analyser tabell';
$strAnd = 'Og';
$strAnIndex = 'En indeks har blitt lagt til %s';
$strAny = 'Alle';
$strAnyColumn = 'Alle kolonner';
$strAnyDatabase = 'Alle databaser';
$strAnyHost = 'Alle verter';
$strAnyTable = 'Alle tabeller';
$strAnyUser = 'Alle brukere';
$strAPrimaryKey = 'En prim�r-n�kkel har blitt lagt til %s';
$strAscending = 'Stigende';
$strAtBeginningOfTable = 'Ved begynnelsen av tabellen';
$strAtEndOfTable = 'Ved slutten av tabellen';
$strAttr = 'Attributter';

$strBack = 'Tilbake';
$strBinary = ' Bin�r ';
$strBinaryDoNotEdit = ' Bin�r - m� ikke redigeres ';
$strBookmarkDeleted = 'Bokmerket har blitt slettet.';
$strBookmarkLabel = 'Navn';
$strBookmarkQuery = 'Lagret SQL-sp�rring';
$strBookmarkThis = 'Lagre denne SQL-sp�rringen';
$strBookmarkView = 'Bare se';
$strBrowse = 'Se p�';
$strBzip = 'Komprimert (bz2)';

$strCantLoadMySQL = 'kan ikke starte MySQL modulen,<br />vennligst kontroller PHP konfigureringen.';
$strCantLoadRecodeIconv = 'Kan ikke laste iconv eller recode modulen som trengs for tegnsett konvertering, konfigurer php slik at disse kan lastes eller sl� av tegnsett konvertering i phpMyAdmin.';
$strCantRenameIdxToPrimary = 'Kan ikke endre indeks til PRIMARY!';
$strCantUseRecodeIconv = 'Kan ikke bruke hverken iconv, libiconv og recode_string funktsjonene selv om modulene sier de er lastet. Sjekk din php konfigurasjon.';
$strCardinality = 'Kardinalitet';
$strCarriage = 'Linjeskift (Mac): \\r';
$strChangeDisplay = 'Velg felt for visning';
$strChange = 'Endre';
$strChangePassword = 'Endre passord';
$strCheckAll = 'Merk alle';
$strCheckDbPriv = 'Kontroller database privilegier';
$strCheckTable = 'Kontroller tabell';
$strChoosePage = 'Vennligst velg en side for redigering';
$strColumn = 'Kolonne';
$strColumnNames = 'Kolonnenavn';
$strComments = 'Kommentarer';
$strCompleteInserts = 'Komplette innlegg';
$strConfigFileError = 'phpMyAdmin kunne ikke lese din konfigurasjonsfil!<br />Dette kan skje hvis PHP finner en syntaksfeil eller ikke kan finne filen.<br />Vennligst kall opp konfigurasjonsfilen direkte via linken under og les PHP feilmeldingen(e) som du vil f�. I de fleste tilfeller s� mangler det et anf�rselstegn eller et semikolon et sted.<br />Hvis du f�r en blank side s� er alt ok.';
$strConfigureTableCoord = 'Vennligst konfigurer koordinatene for tabell %s';
$strConfirm = '�nsker du virkelig � gj�re det?';
$strCookiesRequired = 'Cookies m� v�re sl�tt p� forbi dette punkt.';
$strCopyTable = 'Kopier tabell til (database<b>.</b>tabell):';
$strCopyTableOK = 'Tabellen %s er kopiert til %s.';
$strCreateIndex = 'Lag en indeks p&aring;&nbsp;%s&nbsp;kolonner';
$strCreateIndexTopic = 'Lag en ny indeks';
$strCreateNewDatabase = 'Opprett ny database';
$strCreateNewTable = 'Opprett ny tabell i database %s';
$strCreate = 'Opprett';
$strCreatePage = 'Lag en ny side';
$strCriteria = 'Kriterier';

$strDatabase = 'Database ';
$strDatabaseHasBeenDropped = 'Databasen %s har blitt slettet';
$strDatabases = 'databaser';
$strDatabasesStats = 'Statistikk for databaser';
$strDatabaseWildcard = 'Database (asterisk er tillatt):';
$strData = 'Data';
$strDataOnly = 'Bare data';
$strDefault = 'Standard';
$strDeleted = 'Raden er slettet';
$strDeletedRows = 'Slettede rader:';
$strDeleteFailed = 'Slettingen misslyktes!';
$strDelete = 'Slett';
$strDeleteUserMessage = 'Du har slettet brukeren %s.';
$strDescending = 'Synkende';
$strDisplayOrder = 'Visningsrekkef�lge:';
$strDisplayPDF = 'Vis PDF Schema';
$strDisplay = 'Vis';
$strDoAQuery = 'Utf�r en "query by example" (wildcard: "%")';
$strDocu = 'Dokumentasjon';
$strDoYouReally = 'Vil du virkelig ';
$strDropDB = 'Slett databasen %s';
$strDrop = 'Slett';
$strDropTable = 'Slett tabell';
$strDumpingData = 'Data-ark for tabell';
$strDumpXRows = 'Dumpe %s rader fra rad %s.';
$strDynamic = 'dynamisk';

$strEdit = 'Endre';
$strEditPDFPages = 'Rediger PDF sider';
$strEditPrivileges = 'Rediger privilegier';
$strEffective = 'Effektiv';
$strEmptyResultSet = 'MySQL returnerte tomt resultat (m.a.o. ingen rader).';
$strEmpty = 'T�m';
$strEnd = 'Slutt';
$strEnglishPrivileges = ' OBS: MySQL privilegie navn er p� engelsk ';
$strError = 'Feil';
$strExport = 'Eksporter';
$strExportToXML = 'Eksporter til XML format';
$strExtendedInserts = 'Utvidete innlegg';
$strExtra = 'Ekstra';

$strField = 'Felt';
$strFieldHasBeenDropped = 'Feltet %s har blitt slettet';
$strFieldsEmpty = ' Antall felter er tommt! ';
$strFieldsEnclosedBy = 'Felter omsluttet av';
$strFieldsEscapedBy = 'Felter "escaped" med';
$strFields = 'Felter';
$strFieldsTerminatedBy = 'Felter avsluttet med';
$strFixed = 'statisk';
$strFlushTable = 'Oppfrisk tabellen ("FLUSH")';
$strFormat = 'Format';
$strFormEmpty = 'Manglende verdi i skjemaet!';
$strFullText = 'Hele strenger';
$strFunction = 'Funksjon';

$strGenBy = 'Generert av';
$strGenTime = 'Generert den';
$strGo = 'Utf�r';
$strGrants = 'Rettigheter';
$strGzip = 'Komprimert (gz)';

$strHasBeenAltered = 'er endret.';
$strHasBeenCreated = 'er opprettet.';
$strHaveToShow = 'Du m� velge minst en kolonne for visning';
$strHome = 'Hjem';
$strHomepageOfficial = 'Offisiell phpMyAdmin Hjemmeside';
$strHomepageSourceforge = 'Sourceforge phpMyAdmin nedlastingsside';
$strHostEmpty = 'Vertsnavnet er tomt!';
$strHost = 'Vert';

$strIdxFulltext = 'Fulltekst';
$strIfYouWish = 'Hvis du �nsker � kun lese inn enkelte av tabellens kolonner, angi en komme-separert felt-liste.';
$strIgnore = 'Ignorer';
$strIndexes = 'Indekser';
$strIndexHasBeenDropped = 'Indeksen %s har blitt slettet';
$strIndex = 'Indeks';
$strIndexName = 'Indeks navn&nbsp;:';
$strIndexType = 'Indeks type&nbsp;:';
$strInsertAsNewRow = 'Sett inn som ny rad';
$strInsertedRows = 'Innsatte rader:';
$strInsertNewRow = 'Sett inn ny rad';
$strInsert = 'Sett inn';
$strInsertTextfiles = 'Les tekstfil inn i tabell';
$strInstructions = 'Instruksjoner';
$strInUse = 'i bruk';
$strInvalidName = '"%s" er ett reservert ord, du kan ikke bruke det som et database/tabell/felt navn.';

$strKeepPass = 'Ikke endre passordet';
$strKeyname = 'N�kkel';
$strKill = 'Avslutt';

$strLength = 'Lengde';
$strLengthSet = 'Lengde/Sett*';
$strLimitNumRows = 'Antall poster per side';
$strLineFeed = 'Linjeskift: \\n';
$strLines = 'Linjer';
$strLinesTerminatedBy = 'Linker avsluttet med';
$strLinkNotFound = 'Link ikke funnet';
$strLinksTo = 'Linker til';
$strLocationTextfile = 'Plassering av filen';
$strLogin = 'Logg inn';
$strLogout = 'Logg ut';
$strLogPassword = 'Passord:';
$strLogUsername = 'Brukernavn:';

$strMissingBracket = 'Manglende parantes';
$strModifications = 'Endringene er lagret';
$strModify = 'Endre';
$strModifyIndexTopic = 'Endre en indeks';
$strMoveTable = 'Flytt tabell til (database<b>.</b>tabell):';
$strMoveTableOK = 'Tabellen %s har blitt flyttet til %s.';
$strMySQLCharset = 'MySQL tegnsett';
$strMySQLReloaded = 'MySQL omstartet.';
$strMySQLSaid = 'MySQL sa: ';
$strMySQLServerProcess = 'MySQL %pma_s1% som kj�rer p� %pma_s2% som %pma_s3%';
$strMySQLShowProcess = 'Vis prosesser';
$strMySQLShowStatus = 'Vis MySQL runtime informasjon';
$strMySQLShowVars = 'Vis MySQL systemvariabler';

$strName = 'Navn';
$strNext = 'Neste';
$strNoDatabases = 'Ingen databaser';
$strNoDescription = 'ingen beskrivelse';
$strNoDropDatabases = '"DROP DATABASE" uttrykk er avsl�tt.';
$strNoFrames = 'phpMyAdmin er mere brukervennlig med en <b>ramme-kapabel</b> web-leser.';
$strNoIndex = 'Ingen indeks definert!';
$strNoIndexPartsDefined = 'Ingen indeks deler definert!';
$strNoModification = 'Ingen endring';
$strNo = 'Nei';
$strNone = 'Ingen';
$strNoPassword = 'Intet passord';
$strNoPhp = 'uten PHP kode';
$strNoPrivileges = 'Ingen privilegier';
$strNoQuery = 'Ingen SQL spxrring!';
$strNoRights = 'Du har ikke nok rettigheter til � v�re her n�!';
$strNoTablesFound = 'Ingen tabeller i databasen.';
$strNotNumber = 'Dette er ikke ett tall!';
$strNotSet = '<b>%s</b> tabellen ble ikke funnet eller ikke konfigurert i %s';
$strNotValidNumber = ' er ikke et gyldig rad nummer!';
$strNoUsersFound = 'Ingen bruker(e) funnet.';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s treff i tabell <i>%s</i>';
$strNumSearchResultsTotal = '<b>Totalt:</b> <i>%s</i> treff';

$strOftenQuotation = 'Ofte anf�rselstegn. Valgfritt inneb�rer at kun tekstfelter ("char" og "varchar") felter er omfattet av tegnet.';
$strOperations = 'Operasjoner';
$strOptimizeTable = 'Optimiser tabell';
$strOptionalControls = 'Valgfritt. Angir hvordan spesialtegn skrives eller leses.';
$strOptionally = 'Valgfritt';
$strOptions = 'Innstillinger';
$strOr = 'Eller';
$strOverhead = 'Overheng';

$strPageNumber = 'Side nummer:';
$strPartialText = 'Delvis tekst';
$strPasswordEmpty = 'Passordet er blankt!';
$strPasswordNotSame = 'Passordene er ikke like!';
$strPassword = 'Passord';
$strPdfDbSchema = 'Schema for "%s" databasen - Side %s';
$strPdfInvalidPageNum = 'Undefinert PDF side nummer!';
$strPdfInvalidTblName = 'Tabellen "%s" eksisterer ikke!';
$strPhp = 'Lag PHP kode';
$strPHPVersion = 'PHP Versjon';
$strPmaDocumentation = 'phpMyAdmin Dokumentasjon';
$strPmaUriError = '<tt>$cfg[\'PmaAbsoluteUri\']</tt> variabelen M� v�re innstilt i din konfigurasjons-fil!';
$strPos1 = 'Start';
$strPrevious = 'Forrige';
$strPrimaryKeyHasBeenDropped = 'Prim�r-n�kkelen har blitt slettet';
$strPrimaryKeyName = 'Navnet til  prim&aelig;rn&oslash;kkelen m&aring; v&aelig;re... PRIMARY!';
$strPrimaryKey = 'Prim�rn�kkel';
$strPrimaryKeyWarning = '("PRIMARY" <b>m&aring;</b> v&aelig;re navnet til og <b>bare til</b> en prim&aelig;rn&oslash;kkel!)';
$strPrimary = 'Prim�r';
$strPrintView = 'Utskriftsvennlig forh�ndsvisning';
$strPrivileges = 'Privilegier';
$strProperties = 'Egenskaper';

$strQBEDel = 'Slett';
$strQBEIns = 'Sett inn';
$strQBE = 'Sp�rring ved eksempel (Query by Example)';
$strQueryOnDb = 'SQL-sp�rring i database <b>%s</b>:';

$strRecords = 'Rader';
$strReferentialIntegrity = 'Sjekk referanse integritet:';
$strRelationNotWorking = 'Tilleggsfunksjonene for � kunne jobbe med koblede tabeller er deaktivert. For � finne ut hvorfor, klikk %sher%s.';
$strRelationView = 'Relasjons-visning';
$strReloadFailed = 'Omstart av MySQL feilet.';
$strReloadMySQL = 'Omstart av MySQL';
$strRememberReload = 'Husk � re-starte serveren.';
$strRenameTable = 'Endre tabellens navn';
$strRenameTableOK = 'Tabellen %s har f�tt nytt navn %s';
$strRepairTable = 'Reparer tabell';
$strReplace = 'Erstatt';
$strReplaceTable = 'Erstatt tabell med filen';
$strReset = 'T�m skjema';
$strReType = 'Gjenta';
$strRevokeGrantMessage = 'Du har tilbakekalt Grant privilegiet til %s';
$strRevokeGrant = 'Tilbakekall Grant';
$strRevokeMessage = 'Du har fjernet privilegiene til %s';
$strRevokePriv = 'Tibakekall privilegier';
$strRevoke = 'Tilbakekall';
$strRowLength = 'Rad lengde';
$strRowsFrom = 'rader fra';
$strRowSize = ' Rad st�relse ';
$strRowsModeHorizontal= 'vannrett';
$strRowsModeOptions= 'i %s modus og gjenta headers etter %s celler';
$strRowsModeVertical= 'loddrett';
$strRows = 'Rader';
$strRowsStatistic = 'Rad statistikk';
$strRunning = 'som kj�rer p� %s';
$strRunQuery = 'Kj�r sp�rring';
$strRunSQLQuery = 'Kj�r SQL sp�rring/sp�rringer mot databasen %s';

$strSave = 'Lagre';
$strScaleFactorSmall = 'Skaleringsfaktoren er for liten til � romme alt p� en side';
$strSearchFormTitle = 'S�k i database';
$strSearchInTables = 'I tabell(ene):';
$strSearchNeedle = 'Ord eller verdi(er) � s�ke etter (wildcard: "%"):';
$strSearchOption1 = 'minst ett av ordene';
$strSearchOption2 = 'alle ordene';
$strSearchOption3 = 'med den n�yaktige setningen';
$strSearchOption4 = 'som "regular expression"';
$strSearchResultsFor = 'S�keresultat for "<i>%s</i>" %s:';
$strSearch = 'S�k';
$strSearchType = 'Finn:';
$strSelectADb = 'Vennligst velg en database';
$strSelectAll = 'Velg alle';
$strSelectFields = 'Velg felt (minst ett):';
$strSelectNumRows = 'i sp�rring';
$strSelect = 'Sp�rring';
$strSelectTables = 'Velg tabeller';
$strSend = 'Last ned som fil';
$strServerChoice = 'Server valg';
$strServerVersion = 'Server versjon';
$strSetEnumVal = 'Hvis felttypen er "enum" eller "set", skriv inn verdien med dette formatet: \'a\',\'b\',\'c\'...<br />Hvis du skulle trenge � ha en skr�strek ("\") eller en enkel apostrof ("\'") blant disse verdiene, skriv en skr�strek foran (eks. \'\\\\xyz\' eller \'a\\\'b\').';
$strShowAll = 'Vis alle';
$strShowColor = 'Vis farger';
$strShowCols = 'Vis kolonner';
$strShowGrid = 'Vis rutenett';
$strShowingRecords = 'Viser rader ';
$strShowPHPInfo = 'Vis PHP informasjon';
$strShowTableDimension = 'Vis tabell dimensjoner';
$strShowTables = 'Vis tabeller';
$strShowThisQuery = ' Vis denne sp�rring her igjen ';
$strShow = 'Vis';
$strSingly = '(enkeltvis)';
$strSize = 'St�relse';
$strSort = 'Sorter';
$strSpaceUsage = 'Plass bruk';
$strSplitWordsWithSpace = 'Ord er separert med et mellomrom (" ").';
$strSQLQuery = 'SQL-sp�rring';
$strSQLResult = 'SQL resultat';
$strSQL = 'SQL';
$strStatement = 'Oversikt';
$strStrucCSV = 'CSV data';
$strStrucData = 'Struktur og data';
$strStrucDrop = 'Legg til \'drop table\'';
$strStrucExcelCSV = 'CSV for Ms Excel data';
$strStrucOnly = 'Kun struktur';
$strStructPropose = 'Foresl� tabell struktur';
$strStructure = 'Struktur';
$strSubmit = 'Send';
$strSuccess = 'Kommandoen/sp�rringen er utf�rt';
$strSum = 'Sum';

$strTableComments = 'Tabell kommentarer';
$strTableEmpty = 'Tabellnavnet er tomt!';
$strTableHasBeenDropped = 'Tabellen %s har blitt slettet';
$strTableHasBeenEmptied = 'Tabellen %s har blitt t�mt';
$strTableHasBeenFlushed = 'Tabelen %s har blitt oppfrisket';
$strTableMaintenance = 'Tabell vedlikehold';
$strTables = '%s tabell(er)';
$strTableStructure = 'Tabell-struktur for tabell';
$strTable = 'tabell ';
$strTableType = 'Tabell type';
$strTextAreaLength = ' P� grunn av sin lengde,<br /> s� vil muligens dette feltet ikke v�re redigerbar ';
$strTheContent = 'Innholdet av filen er lagt inn.';
$strTheContents = 'Innholdet av filen erstatter valgt tabell for rader med lik identifikator eller unikt felt';
$strTheTerminator = 'Tegn som angir slutt p� felter.';
$strTotal = 'totalt';
$strType = 'Type';

$strUncheckAll = 'Fjern merking';
$strUnique = 'Unik';
$strUnselectAll = 'Fjern alle valgte';
$strUpdatePrivMessage = 'Du har oppdatert privilegiene til %s.';
$strUpdateProfileMessage = 'Profilen har blitt oppdatert.';
$strUpdateProfile = 'Oppdater profil:';
$strUpdateQuery = 'Oppdater sp�rring';
$strUsage = 'Bruk';
$strUseBackquotes = 'Bruk venstre anf�rselstegn med tabell og felt navn';
$strUser = 'Bruker';
$strUserEmpty = 'Brukernavnet er tomt!';
$strUserName = 'Brukernavn';
$strUsers = 'Brukere';
$strUseTables = 'Bruk tabeller';

$strValue = 'Verdi';
$strViewDumpDB = 'Vis dump (skjema) av database';
$strViewDump = 'Vis dump (skjema) av tabell';

$strWelcome = 'Velkommen til %s';
$strWithChecked = 'Med avkrysset:';
$strWrongUser = 'Ugyldig brukernavn/passord. Ingen tilgang.';

$strYes = 'Ja';

$strZip = 'Komprimert (zip)';
// To translate


$strBeginCut = 'BEGIN CUT';  //to translate
$strBeginRaw = 'BEGIN RAW';  //to translate

$strCharsetOfFile = 'Character set of the file:'; //to translate
$strColComFeat = 'Displaying Column Comments';  //to translate
$strCreatePdfFeat = 'Creation of PDFs';  //to translate

$strDisabled = 'Disabled';  //to translate
$strDisplayFeat = 'Display Features';  //to translate

$strEnabled = 'Enabled';  //to translate
$strEndCut = 'END CUT';  //to translate
$strEndRaw = 'END RAW';  //to translate
$strExplain = 'Explain SQL';  //to translate

$strGeneralRelationFeat = 'General relation features';  //to translate

$strNoExplain = 'Skip Explain SQL';  //to translate
$strNotOK = 'not OK';  //to translate
$strNoValidateSQL = 'Skip Validate SQL';  //to translate

$strOK = 'OK';  //to translate

$strPdfNoTables = 'No tables';  //to translate

$strSQLParserBugMessage = 'There is a chance that you may have found a bug in the SQL parser. Please examine your query closely, and check that the quotes are correct and not mis-matched. Other possible failure causes may be that you are uploading a file with binary outside of a quoted text area. You can also try your query on the MySQL command line interface. The MySQL server error output below, if there is any, may also help you in diagnosing the problem. If you still have problems or if the parser fails where the command line interface succeeds, please reduce your SQL query input to the single query that causes problems, and submit a bug report with the data chunk in the CUT section below:';  //to translate
$strSQLParserUserError = 'There seems to be an error in your SQL query. The MySQL server error output below, if there is any, may also help you in diagnosing the problem';  //to translate
$strSQPBugInvalidIdentifer = 'Invalid Identifer';  //to translate
$strSQPBugUnclosedQuote = 'Unclosed quote';  //to translate
$strSQPBugUnknownPunctuation = 'Unknown Punctuation String';  //to translate

$strValidateSQL = 'Validate SQL';  //to translate

?>
