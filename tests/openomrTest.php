<?php

require("openomr.php");

class OpenOMRTest extends PHPUnit_Framework_TestCase
{
    // ...

    public function testIfImgCanBeRead()
    {
        $omr = OpenOMR::getInstance('example/openomr.jpg');
				$pathMarks = [
					['field' => 'id','marks' =>[[19, 29, 1],[20, 29, 2],[21, 29, 3],[22, 29, 4],[23, 29, 5],[24, 29, 6],[25, 29, 7],[26, 29, 8],[27, 29, 9],[28, 29, 0],]],
					['field' => 'id','marks' =>[[19, 30, 1],[20, 30, 2],[21, 30, 3],[22, 30, 4],[23, 30, 5],[24, 30, 6],[25, 30, 7],[26, 30, 8],[27, 30, 9],[28, 30, 0],]],
					['field' => 'id','marks' =>[[19, 31, 1],[20, 31, 2],[21, 31, 3],[22, 31, 4],[23, 31, 5],[24, 31, 6],[25, 31, 7],[26, 31, 8],[27, 31, 9],[28, 31, 0],]],
					['field' => 'id','marks' =>[[19, 32, 1],[20, 32, 2],[21, 32, 3],[22, 32, 4],[23, 32, 5],[24, 32, 6],[25, 32, 7],[26, 32, 8],[27, 32, 9],[28, 32, 0],]],
					['field' => 'id','marks' =>[[19, 33, 1],[20, 33, 2],[21, 33, 3],[22, 33, 4],[23, 33, 5],[24, 33, 6],[25, 33, 7],[26, 33, 8],[27, 33, 9],[28, 33, 0],]],
					['field' => 'id','marks' =>[[19, 34, 1],[20, 34, 2],[21, 34, 3],[22, 34, 4],[23, 34, 5],[24, 34, 6],[25, 34, 7],[26, 34, 8],[27, 34, 9],[28, 34, 0],]],
					['field' => 'id','marks' =>[[19, 35, 1],[20, 35, 2],[21, 35, 3],[22, 35, 4],[23, 35, 5],[24, 35, 6],[25, 35, 7],[26, 35, 8],[27, 35, 9],[28, 35, 0],]],
					
					['field' => '01', 'marks' => [[31, 3, "A"],[31, 4, "B"],[31, 5, "C"],[31, 6, "D"],[31, 7, "E"]]],
					['field' => '02', 'marks' => [[32, 3, "A"],[32, 4, "B"],[32, 5, "C"],[32, 6, "D"],[32, 7, "E"]]],
					['field' => '03', 'marks' => [[33, 3, "A"],[33, 4, "B"],[33, 5, "C"],[33, 6, "D"],[33, 7, "E"]]],
					['field' => '04', 'marks' => [[34, 3, "A"],[34, 4, "B"],[34, 5, "C"],[34, 6, "D"],[34, 7, "E"]]],
					['field' => '05', 'marks' => [[35, 3, "A"],[35, 4, "B"],[35, 5, "C"],[35, 6, "D"],[35, 7, "E"]]],
					['field' => '06', 'marks' => [[36, 3, "A"],[36, 4, "B"],[36, 5, "C"],[36, 6, "D"],[36, 7, "E"]]],
					['field' => '07', 'marks' => [[37, 3, "A"],[37, 4, "B"],[37, 5, "C"],[37, 6, "D"],[37, 7, "E"]]],
					['field' => '08', 'marks' => [[38, 3, "A"],[38, 4, "B"],[38, 5, "C"],[38, 6, "D"],[38, 7, "E"]]],
					['field' => '09', 'marks' => [[39, 3, "A"],[39, 4, "B"],[39, 5, "C"],[39, 6, "D"],[39, 7, "E"]]],
					['field' => '10', 'marks' => [[40, 3, "A"],[40, 4, "B"],[40, 5, "C"],[40, 6, "D"],[40, 7, "E"]]],
					['field' => '11', 'marks' => [[41, 3, "A"],[41, 4, "B"],[41, 5, "C"],[41, 6, "D"],[41, 7, "E"]]],
					['field' => '12', 'marks' => [[42, 3, "A"],[42, 4, "B"],[42, 5, "C"],[42, 6, "D"],[42, 7, "E"]]],
					['field' => '13', 'marks' => [[43, 3, "A"],[43, 4, "B"],[43, 5, "C"],[43, 6, "D"],[43, 7, "E"]]],
					['field' => '14', 'marks' => [[44, 3, "A"],[44, 4, "B"],[44, 5, "C"],[44, 6, "D"],[44, 7, "E"]]],
					['field' => '15', 'marks' => [[45, 3, "A"],[45, 4, "B"],[45, 5, "C"],[45, 6, "D"],[45, 7, "E"]]],
					['field' => '16', 'marks' => [[46, 3, "A"],[46, 4, "B"],[46, 5, "C"],[46, 6, "D"],[46, 7, "E"]]],
					['field' => '17', 'marks' => [[47, 3, "A"],[47, 4, "B"],[47, 5, "C"],[47, 6, "D"],[47, 7, "E"]]],
					['field' => '18', 'marks' => [[48, 3, "A"],[48, 4, "B"],[48, 5, "C"],[48, 6, "D"],[48, 7, "E"]]],
					['field' => '19', 'marks' => [[49, 3, "A"],[49, 4, "B"],[49, 5, "C"],[49, 6, "D"],[49, 7, "E"]]],
					['field' => '20', 'marks' => [[50, 3, "A"],[50, 4, "B"],[50, 5, "C"],[50, 6, "D"],[50, 7, "E"]]],

					['field' => '21', 'marks' => [[31, 10, "A"],[31, 11, "B"],[31, 12, "C"],[31, 13, "D"],[31, 14, "E"]]],
					['field' => '22', 'marks' => [[32, 10, "A"],[32, 11, "B"],[32, 12, "C"],[32, 13, "D"],[32, 14, "E"]]],
					['field' => '23', 'marks' => [[33, 10, "A"],[33, 11, "B"],[33, 12, "C"],[33, 13, "D"],[33, 14, "E"]]],
					['field' => '24', 'marks' => [[34, 10, "A"],[34, 11, "B"],[34, 12, "C"],[34, 13, "D"],[34, 14, "E"]]],
					['field' => '25', 'marks' => [[35, 10, "A"],[35, 11, "B"],[35, 12, "C"],[35, 13, "D"],[35, 14, "E"]]],
					['field' => '26', 'marks' => [[36, 10, "A"],[36, 11, "B"],[36, 12, "C"],[36, 13, "D"],[36, 14, "E"]]],
					['field' => '27', 'marks' => [[37, 10, "A"],[37, 11, "B"],[37, 12, "C"],[37, 13, "D"],[37, 14, "E"]]],
					['field' => '28', 'marks' => [[38, 10, "A"],[38, 11, "B"],[38, 12, "C"],[38, 13, "D"],[38, 14, "E"]]],
					['field' => '29', 'marks' => [[39, 10, "A"],[39, 11, "B"],[39, 12, "C"],[39, 13, "D"],[39, 14, "E"]]],
					['field' => '30', 'marks' => [[40, 10, "A"],[40, 11, "B"],[40, 12, "C"],[40, 13, "D"],[40, 14, "E"]]],
					['field' => '31', 'marks' => [[41, 10, "A"],[41, 11, "B"],[41, 12, "C"],[41, 13, "D"],[41, 14, "E"]]],
					['field' => '32', 'marks' => [[42, 10, "A"],[42, 11, "B"],[42, 12, "C"],[42, 13, "D"],[42, 14, "E"]]],
					['field' => '33', 'marks' => [[43, 10, "A"],[43, 11, "B"],[43, 12, "C"],[43, 13, "D"],[43, 14, "E"]]],
					['field' => '34', 'marks' => [[44, 10, "A"],[44, 11, "B"],[44, 12, "C"],[44, 13, "D"],[44, 14, "E"]]],
					['field' => '35', 'marks' => [[45, 10, "A"],[45, 11, "B"],[45, 12, "C"],[45, 13, "D"],[45, 14, "E"]]],
					['field' => '36', 'marks' => [[46, 10, "A"],[46, 11, "B"],[46, 12, "C"],[46, 13, "D"],[46, 14, "E"]]],
					['field' => '37', 'marks' => [[47, 10, "A"],[47, 11, "B"],[47, 12, "C"],[47, 13, "D"],[47, 14, "E"]]],
					['field' => '38', 'marks' => [[48, 10, "A"],[48, 11, "B"],[48, 12, "C"],[48, 13, "D"],[48, 14, "E"]]],
					['field' => '39', 'marks' => [[49, 10, "A"],[49, 11, "B"],[49, 12, "C"],[49, 13, "D"],[49, 14, "E"]]],
					['field' => '40', 'marks' => [[50, 10, "A"],[50, 11, "B"],[50, 12, "C"],[50, 13, "D"],[50, 14, "E"]]],

					['field' => '41', 'marks' => [[31, 17, "A"],[31, 18, "B"],[31, 19, "C"],[31, 20, "D"],[31, 21, "E"]]],
					['field' => '42', 'marks' => [[32, 17, "A"],[32, 18, "B"],[32, 19, "C"],[32, 20, "D"],[32, 21, "E"]]],
					['field' => '43', 'marks' => [[33, 17, "A"],[33, 18, "B"],[33, 19, "C"],[33, 20, "D"],[33, 21, "E"]]],
					['field' => '44', 'marks' => [[34, 17, "A"],[34, 18, "B"],[34, 19, "C"],[34, 20, "D"],[34, 21, "E"]]],
					['field' => '45', 'marks' => [[35, 17, "A"],[35, 18, "B"],[35, 19, "C"],[35, 20, "D"],[35, 21, "E"]]],
					['field' => '46', 'marks' => [[36, 17, "A"],[36, 18, "B"],[36, 19, "C"],[36, 20, "D"],[36, 21, "E"]]],
					['field' => '47', 'marks' => [[37, 17, "A"],[37, 18, "B"],[37, 19, "C"],[37, 20, "D"],[37, 21, "E"]]],
					['field' => '48', 'marks' => [[38, 17, "A"],[38, 18, "B"],[38, 19, "C"],[38, 20, "D"],[38, 21, "E"]]],
					['field' => '49', 'marks' => [[39, 17, "A"],[39, 18, "B"],[39, 19, "C"],[39, 20, "D"],[39, 21, "E"]]],
					['field' => '50', 'marks' => [[40, 17, "A"],[40, 18, "B"],[40, 19, "C"],[40, 20, "D"],[40, 21, "E"]]],
					['field' => '51', 'marks' => [[41, 17, "A"],[41, 18, "B"],[41, 19, "C"],[41, 20, "D"],[41, 21, "E"]]],
					['field' => '52', 'marks' => [[42, 17, "A"],[42, 18, "B"],[42, 19, "C"],[42, 20, "D"],[42, 21, "E"]]],
					['field' => '53', 'marks' => [[43, 17, "A"],[43, 18, "B"],[43, 19, "C"],[43, 20, "D"],[43, 21, "E"]]],
					['field' => '54', 'marks' => [[44, 17, "A"],[44, 18, "B"],[44, 19, "C"],[44, 20, "D"],[44, 21, "E"]]],
					['field' => '55', 'marks' => [[45, 17, "A"],[45, 18, "B"],[45, 19, "C"],[45, 20, "D"],[45, 21, "E"]]],
					['field' => '56', 'marks' => [[46, 17, "A"],[46, 18, "B"],[46, 19, "C"],[46, 20, "D"],[46, 21, "E"]]],
					['field' => '57', 'marks' => [[47, 17, "A"],[47, 18, "B"],[47, 19, "C"],[47, 20, "D"],[47, 21, "E"]]],
					['field' => '58', 'marks' => [[48, 17, "A"],[48, 18, "B"],[48, 19, "C"],[48, 20, "D"],[48, 21, "E"]]],
					['field' => '59', 'marks' => [[49, 17, "A"],[49, 18, "B"],[49, 19, "C"],[49, 20, "D"],[49, 21, "E"]]],
					['field' => '60', 'marks' => [[50, 17, "A"],[50, 18, "B"],[50, 19, "C"],[50, 20, "D"],[50, 21, "E"]]],

					['field' => '61', 'marks' => [[31, 24, "A"],[31, 25, "B"],[31, 26, "C"],[31, 27, "D"],[31, 28, "E"]]],
					['field' => '62', 'marks' => [[32, 24, "A"],[32, 25, "B"],[32, 26, "C"],[32, 27, "D"],[32, 28, "E"]]],
					['field' => '63', 'marks' => [[33, 24, "A"],[33, 25, "B"],[33, 26, "C"],[33, 27, "D"],[33, 28, "E"]]],
					['field' => '64', 'marks' => [[34, 24, "A"],[34, 25, "B"],[34, 26, "C"],[34, 27, "D"],[34, 28, "E"]]],
					['field' => '65', 'marks' => [[35, 24, "A"],[35, 25, "B"],[35, 26, "C"],[35, 27, "D"],[35, 28, "E"]]],
					['field' => '66', 'marks' => [[36, 24, "A"],[36, 25, "B"],[36, 26, "C"],[36, 27, "D"],[36, 28, "E"]]],
					['field' => '67', 'marks' => [[37, 24, "A"],[37, 25, "B"],[37, 26, "C"],[37, 27, "D"],[37, 28, "E"]]],
					['field' => '68', 'marks' => [[38, 24, "A"],[38, 25, "B"],[38, 26, "C"],[38, 27, "D"],[38, 28, "E"]]],
					['field' => '69', 'marks' => [[39, 24, "A"],[39, 25, "B"],[39, 26, "C"],[39, 27, "D"],[39, 28, "E"]]],
					['field' => '70', 'marks' => [[40, 24, "A"],[40, 25, "B"],[40, 26, "C"],[40, 27, "D"],[40, 28, "E"]]],
					['field' => '71', 'marks' => [[41, 24, "A"],[41, 25, "B"],[41, 26, "C"],[41, 27, "D"],[41, 28, "E"]]],
					['field' => '72', 'marks' => [[42, 24, "A"],[42, 25, "B"],[42, 26, "C"],[42, 27, "D"],[42, 28, "E"]]],
					['field' => '73', 'marks' => [[43, 24, "A"],[43, 25, "B"],[43, 26, "C"],[43, 27, "D"],[43, 28, "E"]]],
					['field' => '74', 'marks' => [[44, 24, "A"],[44, 25, "B"],[44, 26, "C"],[44, 27, "D"],[44, 28, "E"]]],
					['field' => '75', 'marks' => [[45, 24, "A"],[45, 25, "B"],[45, 26, "C"],[45, 27, "D"],[45, 28, "E"]]],
					['field' => '76', 'marks' => [[46, 24, "A"],[46, 25, "B"],[46, 26, "C"],[46, 27, "D"],[46, 28, "E"]]],
					['field' => '77', 'marks' => [[47, 24, "A"],[47, 25, "B"],[47, 26, "C"],[47, 27, "D"],[47, 28, "E"]]],
					['field' => '78', 'marks' => [[48, 24, "A"],[48, 25, "B"],[48, 26, "C"],[48, 27, "D"],[48, 28, "E"]]],
					['field' => '79', 'marks' => [[49, 24, "A"],[49, 25, "B"],[49, 26, "C"],[49, 27, "D"],[49, 28, "E"]]],
					['field' => '80', 'marks' => [[50, 24, "A"],[50, 25, "B"],[50, 26, "C"],[50, 27, "D"],[50, 28, "E"]]],

					['field' => '81', 'marks' => [[31, 31, "A"],[31, 32, "B"],[31, 33, "C"],[31, 34, "D"],[31, 35, "E"]]],
					['field' => '82', 'marks' => [[32, 31, "A"],[32, 32, "B"],[32, 33, "C"],[32, 34, "D"],[32, 35, "E"]]],
					['field' => '83', 'marks' => [[33, 31, "A"],[33, 32, "B"],[33, 33, "C"],[33, 34, "D"],[33, 35, "E"]]],
					['field' => '84', 'marks' => [[34, 31, "A"],[34, 32, "B"],[34, 33, "C"],[34, 34, "D"],[34, 35, "E"]]],
					['field' => '85', 'marks' => [[35, 31, "A"],[35, 32, "B"],[35, 33, "C"],[35, 34, "D"],[35, 35, "E"]]],
					['field' => '86', 'marks' => [[36, 31, "A"],[36, 32, "B"],[36, 33, "C"],[36, 34, "D"],[36, 35, "E"]]],
					['field' => '87', 'marks' => [[37, 31, "A"],[37, 32, "B"],[37, 33, "C"],[37, 34, "D"],[37, 35, "E"]]],
					['field' => '88', 'marks' => [[38, 31, "A"],[38, 32, "B"],[38, 33, "C"],[38, 34, "D"],[38, 35, "E"]]],
					['field' => '89', 'marks' => [[39, 31, "A"],[39, 32, "B"],[39, 33, "C"],[39, 34, "D"],[39, 35, "E"]]],
					['field' => '90', 'marks' => [[40, 31, "A"],[40, 32, "B"],[40, 33, "C"],[40, 34, "D"],[40, 35, "E"]]],
					['field' => '91', 'marks' => [[41, 31, "A"],[41, 32, "B"],[41, 33, "C"],[41, 34, "D"],[41, 35, "E"]]],
					['field' => '92', 'marks' => [[42, 31, "A"],[42, 32, "B"],[42, 33, "C"],[42, 34, "D"],[42, 35, "E"]]],
					['field' => '93', 'marks' => [[43, 31, "A"],[43, 32, "B"],[43, 33, "C"],[43, 34, "D"],[43, 35, "E"]]],
					['field' => '94', 'marks' => [[44, 31, "A"],[44, 32, "B"],[44, 33, "C"],[44, 34, "D"],[44, 35, "E"]]],
					['field' => '95', 'marks' => [[45, 31, "A"],[45, 32, "B"],[45, 33, "C"],[45, 34, "D"],[45, 35, "E"]]],
					['field' => '96', 'marks' => [[46, 31, "A"],[46, 32, "B"],[46, 33, "C"],[46, 34, "D"],[46, 35, "E"]]],
					['field' => '97', 'marks' => [[47, 31, "A"],[47, 32, "B"],[47, 33, "C"],[47, 34, "D"],[47, 35, "E"]]],
					['field' => '98', 'marks' => [[48, 31, "A"],[48, 32, "B"],[48, 33, "C"],[48, 34, "D"],[48, 35, "E"]]],
					['field' => '99', 'marks' => [[49, 31, "A"],[49, 32, "B"],[49, 33, "C"],[49, 34, "D"],[49, 35, "E"]]],
					['field' => '100', 'marks' => [[50, 31, "A"],[50, 32, "B"],[50, 33, "C"],[50, 34, "D"],[50, 35, "E"]]],
				];
				
				$result = $omr->getMarksFromPaths($pathMarks);

				$this->assertEquals($result['id']['value'], '132');
				$this->assertEquals($result['01']['value'], 'A');
				$this->assertEquals($result['02']['value'], 'C');
				$this->assertEquals($result['03']['value'], 'C');
				$this->assertEquals($result['04']['value'], 'D');
				$this->assertEquals($result['05']['value'], 'B');
				$this->assertEquals($result['06']['value'], 'C');
				$this->assertEquals($result['07']['value'], 'A');
				$this->assertEquals($result['08']['value'], 'E');
				$this->assertEquals($result['09']['value'], 'E');
				$this->assertEquals($result['10']['value'], 'B');
				$this->assertEquals($result['11']['value'], 'A');
				$this->assertEquals($result['12']['value'], 'D');
    }

    // ...
}





	
	
	