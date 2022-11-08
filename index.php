<?php
error_reporting(0);
require_once 'db.php';
require_once 'simplehtmldom_1_9_1\simple_html_dom.php';
require_once 'function.php';

$ch = curl_init();
$url = 'www.arbitat.ru';

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "ctl00%24ctl00%24BodyScripts%24BodyScripts%24scripts=ctl00%24ctl00%24MainContent%24ContentPlaceHolderMiddle%24UpdatePanel2%7Cctl00%24ctl00%24MainContent%24ContentPlaceHolderMiddle%24PurchasesSearchResult%24ctl01%24ctl02&ctl00%24ctl00%24LeftContentLogin%24ctl00%24Login1%24UserName=&ctl00%24ctl00%24LeftContentLogin%24ctl00%24Login1%24Password=&ctl00%24ctl00%24LeftContentSideMenu%24mSideMenu%24extAccordionMenu_AccordionExtender_ClientState=0&ctl00%24ctl00%24MainExpandableArea%24phExpandCollapse%24PurchasesSearchCriteria%24vPurchaseLot_lotNumber_%D0%BB%D0%BE%D1%82%D0%B0=&ctl00%24ctl00%24MainExpandableArea%24phExpandCollapse%24PurchasesSearchCriteria%24vPurchaseLot_purchaseNumber_%D1%82%D0%BE%D1%80%D0%B3%D0%B0=&ctl00%24ctl00%24MainExpandableArea%24phExpandCollapse%24PurchasesSearchCriteria%24vPurchaseLot_lotTitle_%D0%9D%D0%B0%D0%B8%D0%BC%D0%B5%D0%BD%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5%D0%BB%D0%BE%D1%82%D0%B0=&ctl00%24ctl00%24MainExpandableArea%24phExpandCollapse%24PurchasesSearchCriteria%24vPurchaseLot_fullTitle_%D0%9D%D0%B0%D0%B8%D0%BC%D0%B5%D0%BD%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5%D1%82%D0%BE%D1%80%D0%B3%D0%B0=&ctl00%24ctl00%24MainExpandableArea%24phExpandCollapse%24PurchasesSearchCriteria%24Party_contactName_AliasFullOrganizerTitle=&ctl00%24ctl00%24MainExpandableArea%24phExpandCollapse%24PurchasesSearchCriteria%24vPurchaseLot_InitialPrice_%D0%9D%D0%B0%D1%87%D0%B0%D0%BB%D1%8C%D0%BD%D0%B0%D1%8F%D1%86%D0%B5%D0%BD%D0%B0%D0%BE%D1%82%D1%80%D1%83%D0%B1=&ctl00%24ctl00%24MainExpandableArea%24phExpandCollapse%24PurchasesSearchCriteria%24Party_inn_%D0%98%D0%9D%D0%9D%D0%BE%D1%80%D0%B3%D0%B0%D0%BD%D0%B8%D0%B7%D0%B0%D1%82%D0%BE%D1%80%D0%B0=&ctl00%24ctl00%24MainExpandableArea%24phExpandCollapse%24PurchasesSearchCriteria%24vPurchaseLot_bargainTypeID_%D0%A2%D0%B8%D0%BF%D1%82%D0%BE%D1%80%D0%B3%D0%BE%D0%B2%24ddlBargainType=10%2C11%2C12%2C111%2C13&ctl00%24ctl00%24MainExpandableArea%24phExpandCollapse%24PurchasesSearchCriteria%24Party_kpp_%D0%9A%D0%9F%D0%9F%D0%BE%D1%80%D0%B3%D0%B0%D0%BD%D0%B8%D0%B7%D0%B0%D1%82%D0%BE%D1%80%D0%B0=&ctl00%24ctl00%24MainExpandableArea%24phExpandCollapse%24PurchasesSearchCriteria%24BargainType_PriceForm_%D0%A4%D0%BE%D1%80%D0%BC%D0%B0%D0%BF%D1%80%D0%B5%D0%B4%D1%81%D1%82%D0%B0%D0%B2%D0%BB%D0%B5%D0%BD%D0%B8%D1%8F%D0%BF%D1%80%D0%B5%D0%B4%D0%BB%D0%BE%D0%B6%D0%B5%D0%BD%D0%B8%D0%B9%D0%BE%D1%86%D0%B5%D0%BD%D0%B5=&ctl00%24ctl00%24MainExpandableArea%24phExpandCollapse%24PurchasesSearchCriteria%24Party_registeredAddress_%D0%90%D0%B4%D1%80%D0%B5%D1%81%D1%80%D0%B5%D0%B3%D0%B8%D1%81%D1%82%D1%80%D0%B0%D1%86%D0%B8%D0%B8%D0%BE%D1%80%D0%B3%D0%B0%D0%BD%D0%B8%D0%B7%D0%B0%D1%82%D0%BE%D1%80%D0%B0=&ctl00%24ctl00%24MainExpandableArea%24phExpandCollapse%24PurchasesSearchCriteria%24vPurchaseLot_purchaseStatusID_%D0%A1%D1%82%D0%B0%D1%82%D1%83%D1%81=&ctl00%24ctl00%24MainExpandableArea%24phExpandCollapse%24PurchasesSearchCriteria%24vPurchaseLot_BankruptName_%D0%94%D0%BE%D0%BB%D0%B6%D0%BD%D0%B8%D0%BA=&ctl00%24ctl00%24MainExpandableArea%24phExpandCollapse%24PurchasesSearchCriteria%24vPurchaseLot_BankruptINN_%D0%98%D0%9D%D0%9D%D0%B4%D0%BE%D0%BB%D0%B6%D0%BD%D0%B8%D0%BA%D0%B0=&__EVENTTARGET=ctl00%24ctl00%24MainContent%24ContentPlaceHolderMiddle%24PurchasesSearchResult%24ctl01%24ctl02&__EVENTARGUMENT=&__VIEWSTATE=&__SCROLLPOSITIONX=0&__SCROLLPOSITIONY=0&__EVENTVALIDATION=%2FwEdAC6vVXD1oYELeveMr0vHCmYPlMMwQdi9JE76XlDpiyGaGiK96Mh9z4MIAfI7yfbJUJsPO%2BW3lSX2%2FDWdCcCk3rJcyrcU%2BtH5HkUc0Yvcf5zJEfusfBu%2B8729k%2FlgDp402W3yZda1D3HpWSYwxVupBiDzqZcHwbjqlDITs67gXqoxNfGKJSyCDYUib6o0oO8HtPHXJt2lfoMywfGSYlr349hf1wsLz3uVDitIdW1lZLNUmyYlrA4KHjyQob8WN%2BOdgrOZQAlyEt7Ac1iMlWMve%2BMqqCrsOUlQmNy2NVlpKLTT57KnTrdrpaAhfRt5qtVLlLcHcNdJhcYI2VcxDA8VD3Ir%2Bjo7rW34WQv2uKzvBI7h4wBshHV0UIxpVFC1vlt3IMv8FrmcMA%2FyYnzif9kvRnCBD%2BRzX2l6mETVSBYx%2FUgUBHyHS5ZYjtauxgBEt62NdpIcqqY4BfzDM3lEX3obQti9WxfXD8eq6AxVt%2BkZUqFymAx2CH%2BfmzFtIq6i3fRDE%2FCuQ9QkBrLRMoFzjNDPxTpy8t2eeMu4k5kMRztz2F6QpYlLhuk8SCesJY2cTWDGlKRR3qZjAUm5VohdIZTxgFtOwsthPrTfRJ1uz%2BNuez56w2YpZWYcCxx3FNqgnWJck90R09dKJkUOzVGXvOctQ1XW1mgMvxtEvWPOp8%2BH5hp2uEqdpRZYka0e9HAecvAqjHHHGctzL2A0QUlkveF1yD%2Bxs3VEL%2BtyDD2I2qKykC%2FB4RoSiaxRjewt3vKD8rA0rdjWgnn3CFbkRmaUb7S0y6wn%2F5xKIctnAx3op92ZwSyib8TBr0toBdLCJQzJ7bsV7REiaW64Grk4DXQTXa1aiMAyCjeHuz2YkgjgoXS1Znq2SswbSzaLLvEl5rMHIacrVnClK99uVWJkVmsOAAKMmpYegqyXE%2Bftg4U%2B17fn5qnGQmsoO3JUsyYElzrSDhh9iLPcSV%2FbqObCqsFGwbQg%2BWt3pEusXKgPCCPNeNJtAvZOcB6wlut9wTtFGbWqbY%2BMRpM%3D&__CVIEWSTATE=7VpdcBvVFdautbLkn8gQR6QB5E1IgRAha2U7iYMTxpExuITE4CRMO8zsrLVX8jarXWV3Fcc8UJLw004ZQplSmA4QoO1TpzNOwGDyxwxvnb6sHjrTTmdaSkvhoQ996is9595d%2Fct2IC4vyOPr3XvPPff83%2B9e%2BUsuGhW6pNTwnnR6ZGhoJKrG%2BFyl4Tloe2jLey0f7VPVGJdTeSEajfHxzmOarc3qZK5KAixjwXjvQTNvlpxpJU%2BOWrrADQ4E5lSV78RZ7HFDtHaOGgvyHThzgKsQB6NjOwNdXAAX6s1YRHHIUZtYyC88WCzN6lp2sE7WMF2cj%2Fc8YFmm9QixbVhe2H3nHafSqXT6PtF92b3oLrnvucvlM%2B6S6C67V8rnRPcj95p7ufyC%2BwH8vegu4hi8nwMJOqi4HcL2tiw%2BAvqn2Xyg7%2FbVq9OMB01QrOgxRddUxdFM40HLLBUFAYykGTCvl473HjYyukYMB9rscQL9UTq7o8oph3Td8tYphxQyZslw%2BI5YyPPYpmBfSkpKUhIlFaU9e0dSMd9MBpm3B09qZH5QklKDr3Purzw1rrlX3MvwdBWMAepccy%2BgWT6AXuxj%2FcsiqLjIOvEJtKYdYCuxfAYel9wLzHRIXj63VwSW18pnRAmG4eFp913x02d%2BIUpDo7t3JUS66mX3fcr7kui%2BDvOueMJcTIriHzrGivvH7KJiiLazoJN923Km4dxra0%2BSvZJUPLVtv%2FtLIL3qXiqfLZ8G7lfLP3U%2FFMtnK2KB88ovln8C7D8U3d%2BABM%2BiQO5F0X0t6b6SRA2vlp%2Bhkl0BgZ%2BGqUsgLmi4SIfOUD2XyqcrWuESSyKsxvS5hh0Jsfw8voswvijWmJ7y8ZVEE16FSTC1%2FAIquwzSLLofMonQmK8n3beTGEl0Ufe9BovAyldE99Wk%2B1YyIVKKRZgLPkKpgWwRQ%2FgqdQWzNfQ8K6ZS1Nri3b4rdqCBqFfLL5R%2FDPMvA91pFAnn7kqJQ6NSYgiEvwg%2Fy%2B575bOgHiU5AyI%2FjzoAa1B2marS5HTR%2FbX7NvycT44Nou%2F2jw0W9%2Fd2qX7cQnSmh5OpUTSRJEqpvUMjraIzlR6cdN8UJybMGZGm4qJ7CQMThXR%2F577jnhfdl2D1CzQBgUBMD4FfqF5nyufcC%2BDNcyKucZaDMLo%2BVn6kX0CTUTNibUCToP9OUxZXqdJeypRfxGhegnBjNeMF39Xusq8%2BX5ecKVBfGhWl3XtTI5ua1d89OvgUCFZNGajKu8BxwPAiDY%2F3cTkvWSGCl1EZ0JwFKnNQizxYYp6ryzs0wnma1cjvEgy9lHRfTr4qrJB8aZp8b7Igo2w%2BoIYFeavRR%2FPsTfwRP%2F6t%2BwYNYUyoZ9FLQHERI%2BjjyyIVGuoNyLfI0g%2BLT0tdl8Ux27FMI18vWdbUTWvvHXtS%2BGFVAbx%2FmiqD1oDkfwk9BV3LWLipm6mXlmAcMrgSqR53yJbXQOI3RobSUjqd2jUyMrxnx5rWbvQFTdqWFenKan4QmSOaZHN%2FzhxMo%2FFpEQlZnUEPQGBDYT1PS9MSFMYzbJUKOa5yCeXB0sHq9zWcClJAzJ9mdeUSzfwPPDtdQcJWJkXpGItlWsRojSv%2FVES%2FfwRrXKDlCRQrP0d9x4rTaSx6bM98BUrFW1AqfkZDfFgaHQU7i7RM%2BSVCGnXfbSwkNzWikZy32TZukAMhik8qwCJXBR189bGzDn%2FAtho8Qk45wk3uyxio1XheVvlItHFD53yQFKKPd%2BYo6AlnbDujK7Yt9GchayxTFyFOSgXjUKkwS6x4UN46c4DnY%2BF40FAKRMhnHT2V2s7aRxTNeOAUKKwqAKjGAe5sL86xjoyp60rRJtunS1Z2TrGJPUMUeMpYmkMsTdl%2B0h84aDqybjpsPZnVfncxHikopw4SI%2B%2FMCbwkxSOmcZwsqOa8IdyvlByzYJ4kd5OTgDwSojOn2QlRkhLiXVOGM5S%2BKyEaJV2vb%2B%2B61%2BveEe%2BivIoWgC3hB1pOvHur%2F%2FoQSK4T6ysy3iFaxClZhphTdJvcpzJcORAWBILgbiDC854%2FsbPTszd2Q0eX8NR6mfaI5uhEhiqBUIGhpMouiHsAs%2FhAtxBMQ2VQPVDbQsITN0rCacVyFmRkr2SdQxBX8riuKfYkWPGwlVcMKN0WlRqE6hhBmYLtZCreWJk0w5BZRfWRSf2mQe3ES2l2mvh%2FSHS8WJShqJ2Hn%2FYScaMqH2on0GvcjZXIInnNhg6ijqsqpo0Mm9Z7DH7SqvxuBXF5BXUFyTvSIyPskLW%2BxqxLigOKcdwqFVno0V2qsrnRiEP%2FhtuJNL%2BuIk0dOuQHYMOm6wdepIVgUFe6vO6WdZwKHwbhjXURvug9e0W8CuupzNJAz9cu2gO961uqu1uV6p52IXCaWxcz5kC0lYt1nWWDcPQYZidxlDJW7%2FhMybKIkV2ouP659RF6ytAcTdGnLS3L5MYzmHewgIMeFIAlCjOvYUFArEVjYhhiYrxNTAyDpyZIViso%2BupR8cQaomLtDJviYgM1LpiwEhv0jqNFsPS1SkuKu%2Fq8G5AJxVEOmCVDzatAmuM5nuc7YsE%2BIcQAnBCVUgkIYSkNLfwZyvcJG%2BC8dxZwMJZROMILAiWhA9UbBYC7QojNgpEdAKo9SOsdgpcY9sXTeQX9YjSBH4byKsLUFnHOQ8i8c8NC5oAC%2B7pmHFkoEpmGyqRpFWRA1exGY9EX0DuyVo%2Br51qK%2FiHMY4G1pPI3txPfWtdiN%2BMoTsmempDdt9lhHO92fPTUKdzivkZPIYv0FqWKzQcEvCajd5Hs8aZWIB0fx3YGuvlANNYfD2PoPEwW7Fgg3p%2Bh6T1jWg5Ij0GvmYaQPumLBYAv6T8btB4n6sbgl3XHb4ZKSSwDclexYCOEZzt9LRbgAoHAl%2FDBv%2Fjp4aH5%2FqSZnzFzTvJxMptEacazWVg6IR6DWSDAPimZTqaSqYSYKemQQWSfQUqOpUB2TdMrA5D%2BiHmcGPt2p4YBZmZTo8PZnDqcGxJwne2t2Scrkh0ExBEEwthDij1HVHzdKdtgA%2FZ8S233SUUvEfsIunlzbX%2FJ0E6UyDE6%2Bp0JLYu3moq1cAAMs1MG88w5OKWjI9Bx28wCAJxCEgODUDo7OW5ZygIyajX4kD%2BbW3EULRnpwAZ14SICtEF8X3FBJAjJEIoFW5DxWiMsn2RWh%2FnhcCQE47z3Gwy24VaRAam7DpqKOgnY27Q6PQd2g4MyZqGoWMQKI%2FEMLBTEmAsxiwUCHQFB6A7f6jNnfh6fhxmVif9%2BdM%2F9VMnOANLDQxibCGpLlYXfZppubHqg6Qt5NJFebDZA08sHkW6lVZFHD5wm6NuUkTO7ZS1vmEAAng3LZpFaANwqekwe1M1ZRdeepPfayUx1InfHShSHGaNIFLUJ%2FgdSZC3kGN6dNCRlORDGt76w5yyqIFW1L%2BJ1hSlFGCkCfd1eZ2gjNBvHdd2cJ2pNJbVD%2FUg23VCQ%2Bnqa%2BPfcAs3jtUmWYbXyhmQwrhBvxbyav6jB5sobSzlCKy%2FUsm0NA5736Nj4LJSxLIk1ktiT2imiDjR3m1amZAOueLRErIXNrca%2FZ2rGxoYBvNzY0tBnzv4QsodG%2F%2FaGoaKiWdUuMqec1ExLXIkIjxqxJgIHC%2FAtDd0WOVHS4HTVKKMNdrm1Rd%2BUYTsK2KiZ%2FknSaCDbhGDxTIsibWoYdyC6iNNoNmeeKMehLDct4UAU9jf00VinmwfHBzkuCCWJCwY6OPwk2tb5FvbEEN652sbwGDNWAfAe0g%2B0oZ8BO6G%2BSHNvO5oTetLfEpOHTGfKwFk0K%2B9cTYwj1G5Iyw14ReEoAOOFGcQPfmV4yNRVYmEqhjbTrRWsFMEU7hL%2BBdXkuoxTX1Z4b6%2BObPYb4Z%2FA8Xqs15qh8A9gs5pRm6diOYvEPR6hAWhur8VQyUYMJXwCy6zRyK0FDUS24lLboOmXdiWk3QlpT0IaTexCOD2aGOXoZuJbh1oea1IX9xdYGa1fbz7uz9CFJqQu%2FRM8oCHoZrbDV%2BseaLbUqTVbrc1TE9wfYcYnHmdPvHuhaUT5QdxPVt2acFcMFWidisxrxlD6YGZqojPLSnVvQUY86FVy0K0jHG7NsYaMGQI%2BP6IRGL%2FuzEBH9OID1tWjCKUg45FhEHVdLQ1w1w7iGhFKgTbrGbdtUpjVF1hQceHQIF2CMTpMyzG1Qwqahwt21rR0bba6gw3j%2FrWWHWx2925lJDuySxodGiapPaMC%2BvSetSi%2Fiubd8U3s3O004PP7VsDnokrsbBuQLip2Nt7n8cR%2FTZgyVHIqF%2B87pllOSdGr36r%2FnhsI8f3xTeycOUPrfO1oPILT2Vt3PIryTcC6llYEFGin%2F9v3jQD%2FdhWK7VBVAREHI4Dskx38rwp6XTxuA%2B%2F1PxAE8ETAreeR4NszwbdngsqZoKJlzZkgEPBPBvVngltXqCr0bBBrXVWqJ4TKahTE37XGbNyEE%2BheFJIVTMWmtOwFFKtT1bGw3ywr%2BbxF8oAgJ0sGjb4eWSU5BTyHX2FGaOYiZVjWjKxeUklUViHM4YUBcDsCDBX1sKEDawADigrSsTdFn1cW7KNF6CH9MlTcHIFqqQLQJ%2BBykCVSQdQ3y6qnA0jAlIrJc05BxwMLFNhxx7G02ZJD7Hjr7mmG2O3OzJxi5Il629hjhEFqWGf%2FcVk%2BoGSPa0Z%2BUiO6uq12cBrk0k41ktw%2BNsGsQJVsHOU4yF0uSIsxB1CaoyD6jjZOeqzG4Ojbu9vQjTe6YkXc7PmFwiD8fHfFEPHwpIrkG71EeADvYr2LWRpzG%2F0mIHyBCbMGfZoxH%2FYIn8P0NavZGjeGtlBBPlsJ5no2aGbgCxKIIBcKuddmnzboHbl00U8Vrvb7TYD7FPh%2F4W3Q3N%2Fh4XMft%2BJE7m%2Fw9pk%2FXO3%2Bq4dkG1b4xmDnFk9bCju7Va5%2FZyA2tjMA8U1vcXvzlqaO6w4zGN7l1gx24WB1BKYGVTrQ0%2FRtV8te9SsuVDNyW%2F3XK2ITFxSK%2FscGJd%2FQ4tuYNv3q9avztQzQwphVubeC8%2FJGhiDwFQ1z3lKK3hdLeA9wRCuQRlVq%2B2uXEVtwamk0pkhi1YXFernbysAUikcwC2k9Fba13C9tegjV1KQDW1Gb0MBu8rWd1NUsOfkmPN%2Fb3v6kjWAN%2Faq6mRfisuzf9HmFbdq0HdzBYMOT5RgvTDZ%2BA%2BPtqNu9v9O6kiXsPPiIpsIO0fgVDOygUGuEB2%2FQNznCtlpGR8ziI4CWvLcCsMXXaFQVbvP%2FpdFdfqL5v6v%2BBw%3D%3D&__ASYNCPOST=true&");
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
curl_setopt($ch, CURLHEADER_UNIFIED, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$headers = array();
$headers[] = 'Accept: */*';
$headers[] = 'Accept-Language: ru,en;q=0.9';
$headers[] = 'Cache-Control: no-cache';
$headers[] = 'Connection: keep-alive';
$headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8';
$headers[] = 'Cookie: __ddg1_=x0IZb7vjyxONpQAqIHhU; _ym_uid=1667503028666283662; _ym_d=1667503028; ASP.NET_SessionId=q5n1apr4esrdxvetz5csyku1';
$headers[] = 'Origin: http://www.arbitat.ru';
$headers[] = 'Referer: http://www.arbitat.ru/';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.5112.124 YaBrowser/22.9.5.710 Yowser/2.5 Safari/537.36';
$headers[] = 'X-Microsoftajax: Delta=true';
$headers[] = 'X-Requested-With: XMLHttpRequest';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$fileName = 'site.html';
$file = fopen($fileName, 'w');
curl_setopt($ch, CURLOPT_FILE, $file);
$res = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Ошибка:' . curl_error($ch);
}
$html = file_get_html($fileName);

foreach ($html->find('.gridRow') as $post) {
    $numberId = $post->find('.gridAltColumn', 0);
    $linkId = $post->find('.tip-lot', 0);
    $dateId = $post->find('td', 7);
    $statusId = $post->find('td', 8);
    $priceId = $post->find('td', 4);
    $idLotId = $post->find('td', 2);
    $array[] = [
        'number' => $numberId->plaintext,
        'date' => $dateId->plaintext,
        'link' =>  $url . $linkId->href,
        'idLot' => $idLotId->plaintext,
        'status' => $statusId->innertext,
        'price' => $priceId->plaintext,
    ];
}

$oneAr = array_slice($array, 2, 1);
$twoAr = array_slice($array, 3, 1);
$threeAr = array_slice($array, 5, 1);

cheak($oneAr, $connect);
cheak($twoAr, $connect);
cheak($threeAr, $connect);
