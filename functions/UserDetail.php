<?php
include('OnaxDbContext');

class UserDetail{
    public $UserId;
    public $UserName;
    public $UserPassword;
    public $LogonStatus;
    public $LogCount;
    public $UserEmail;
    public $MobileNo;
    public $ActiveStatus;
    public $CreatedBy = "sysuser";
    public $ModifiedBy = "sysuser";
    public $CreatedDate;
    public $ModifiedDate;
    
    function GetAll(){
        
    }
    function GetById($UserId){
        
    }
    
    function Create(){
        
    }
}