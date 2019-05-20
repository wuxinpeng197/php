#!/usr/bin/perl
if($ARGV[0] eq "-a" ||$ARGV[0] eq "-v" ||$ARGV[0] eq 
"-s"||$ARGV[0] eq "-l" ||$ARGV[0] eq "-m"){
if(scalar(@ARGV)<=2){
open (IN,"<",$ARGV[1]) or die "no file exists";

$size1=0;
while (<IN>)
{ chomp;  
($type, $language, $filename, $size) = split(/,/);

if ($ARGV[0] eq "-a") {

if($type eq "locale"){
  push(@count1,$filename);
}
}


elsif ($ARGV[0] eq "-m") {

	if($type eq "charmap"){
  push(@count2,$filename);
}
}


elsif ($ARGV[0] eq "-s") {
   if ($type eq "locale"){
$size1+=$size;
}  
}
}

if($ARGV[0] eq "-a"){
if(@count1){
print "Available locales:\n";
for ($i=0;$i<scalar(@count1);$i++){
print "$count1[$i]\n";
}
}
else{
print "No locales available\n";
}
}

if($ARGV[0] eq "-m"){
if(@count2){
print "Available charmaps:\n";
for ($i=0;$i<scalar(@count2);$i++){
print "$count2[$i]\n";
}
}
else{
print "No charmaps available\n";
}
}


if($ARGV[0] eq "-s"){
if($size1){
print "Total size in bytes of all locales: $size1\n";
}
else{
print "Total size in bytes of all locales: 0\n"
}
}
if($ARGV[0] eq "-v"){
print "Name:Xinpeng Wu  ID:12714287\n"
}
}

elsif(scalar(@ARGV)==3){
$num1=0;
$num2=0;
if($ARGV[0] eq "-l"){
open (IN,"<",$ARGV[2]) or die "Invalid command syntax";

while(<IN>){
  chomp;
  ($type, $language, $filename, $size) = split(/,/);
if($language eq "$ARGV[1]" ){
if($type eq "locale"){
$num1+=1;
}
elsif($type eq "charmap"){
$num2+=1;
}
}
}
}
if($num1||$num2){
print "Language $ARGV[1]:\n";
print "Total number of locales: $num1\n";
print "Total number of charmaps: $num2\n";
}
else{
print "No locales or charmaps in this language\n";
}
}
}
else{
print "Invalid command syntax\n";
}
