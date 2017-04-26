<? namespace Craft;

class HelveticaPlugin extends BasePlugin
{
  public function getName()
  {
    return Craft::t('Redactor Typeface Override');
  }

  public function getVersion()
  {
    return '1.0';
  }

  public function getDeveloper()
  {
    return 'oof. Studio';
  }

  public function getDeveloperUrl()
  {
    return 'http://oof.studio/';
  }

  public function hasCpSection()
  {
    return false;
  }

  public function init()
  {
    if (craft()->request->isCpRequest() && craft()->userSession->isLoggedIn())
    {
      craft()->templates->includeCssResource('helvetica/css/styles.css');
    }
  }
}
