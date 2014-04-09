<?php

// Given an array of numbers:
// Return "True" if there is a way to split the array such that the sum 
// of the numbers on one side is equal to the sum of the numbers on the other side. 
// Otherwise, return false.

// ex: $my_array = array(1, 2, 1, 1, 1);
// can_balance($my_array); 
// //returns true, because 1 + 2 = 1 + 1 + 1

// $another_array = array(1, 2, 1, 1, 1, 3);
// can_balance($another_array);
//returns false

public boolean canBalance(int[] nums) 
{
  int leftSum = 0, rightSum = 0, i, j;
  if(nums.length == 1)
      return false;
  for(i=0, j=nums.length-1; i<=j ;)
  {
      if(leftSum <= rightSum){
         leftSum+=nums[i];
         i++;
      }else{
         rightSum+=nums[j];
         j--;
      }
  }
  return (rightSum == leftSum);
}

?>