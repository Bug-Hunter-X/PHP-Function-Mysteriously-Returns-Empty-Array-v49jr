# PHP Function Mysteriously Returns Empty Array

This repository demonstrates a subtle bug in PHP where a function unexpectedly returns an empty array, even when the input is not empty.  The issue is related to unintended side effects and how PHP handles references. The solution shows how to avoid this issue.

## Bug Description

A PHP function designed to process an array sometimes returns an empty array. The code appears correct, but under certain conditions,  the internal array processing leads to an empty return value.

## Solution

The solution addresses the issue of unintended side effects by creating a copy of the input array and working only on the copy.