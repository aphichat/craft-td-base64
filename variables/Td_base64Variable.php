<?php
namespace Craft;

/**
* Convert variable to base64
*
* @author Aphichat Panjamanee <http://28desk.com>
*/
class Td_base64Variable
{
  function encode($token='')
  {
    return base64_encode($token);
  }

  function decode($token='')
  {
    return base64_decode($token);
  }
}
