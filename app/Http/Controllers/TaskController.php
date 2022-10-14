<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * @param array $arr_values
     * @return int
     * return the lowest integer positive value does not exist in arr_values
     */
    public function taskOne()
    {
        $positive_values = [];
        foreach (Request()->arr_values as $value) {
            if ($value > 0) {
                array_push($positive_values, $value);
            }
        }
        $biggest_value = max($positive_values);

        $lowest_value = min($positive_values);
        $result = [];
        for ($i = $lowest_value; $i < $biggest_value; $i++) {
            if (!in_array($i, Request()->arr_values) && $i > 0) {
                array_push($result, $i);
            }
        }
        return min($result);
    }
    /**
     * @param array $arr_values
     * @return int
     * return the lowest integer positive value does not exist in arr_values
     */
    public function taskTow()
    {

        $result = [];
        $pattern = "/5/i";
        for ($i = Request()->start; $i <= Request()->end; $i++) {
            if (!preg_match($pattern, $i)) {
                array_push($result, $i);
            }
        }
        foreach (range('A', 'Z') as $elements) {

            // Display all alphabetic elements
            // one after another
            echo $elements . ", ";
        }
        return count($result);
    }
    /**
     * @param array $arr_values
     * @return int
     * return the lowest integer positive value does not exist in arr_values
     */
    public function taskThree()
    {
        $input_string = Request()->input_string;
        $char_indexs = range('A', 'Z');
        $count = 0;
        for ($i = 1; $i <= strlen($input_string); $i++) {
            if ($i == strlen($input_string)) {
                $count += array_keys($char_indexs, $input_string[$i - 1])[0] + 1;
            } else {
                if ($i >= 2) {
                    $count *= (count($char_indexs) + 1) + ((array_keys($char_indexs, $input_string[$i - 1])[0]));
                } else {
                    $count += count($char_indexs) * (array_keys($char_indexs, $input_string[$i - 1])[0] + 1);
                }
            }
        }
        return $count;
    }
    /**
     * @param array $arr_values
     * @return int
     * return the lowest integer positive value does not exist in arr_values
     */
    public function taskFour()
    {
        $n = 2;
        $values = [190, 4];
        $result = [];
        for ($i = 0; $i < $n; $i++) {
            $hafe_value = 0;
            $count = 0;
            if (fmod($values[$i], 2) == 0 && $values[1] / 2 != 1) {
                $hafe_value = $values[$i] / 2;
                $values[$i] = $values[$i] / $hafe_value;
                $count = 1;
            } elseif ($values[$i] / 2 != 1) {
                $hafe_value = ($values[$i] - 1) / 2;
                $values[$i] = $values[$i] / $hafe_value;
                $count = 2;
            }
            for ($j = 0; $j <= $values[$i]; $j++) {

                $result[$i] = $count++;
            }
        }


        return ($result);
    }
}