<?php
		require_once '../Class/Revert.php';
		
		class Test extends Revert
		{

				public function test()
				{
					$test_str = "hello";
					$this->str = $test_str;
					
					$arr_rev_step = str_split($test_str, 1);
					$arr_rev = array_reverse($arr_rev_step);

					$flag = true;

					for ($i=0; $i < count($arr_rev_step); $i++) 
					{ 
						for ($j=count($arr_rev_step)-1; $j >= 0; $j--) 
						{ 
							if ($arr_rev_step[$i] == $arr_rev[$j])
							{
								$flag = true;
							} else
							{
								$flag = false;
							}

							if ($flag === false)
							{
								return $flag;
							}
						}

					}
					return $flag;
				} 

		}