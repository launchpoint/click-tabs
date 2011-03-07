<?

$saved_tab_links = array();
if(isset($tab_links)) $saved_tab_links = $tab_links;
if(!isset($tab_data)) $tab_data = array();


$events = array(
  'tab_links',
);

$vars = array();
foreach($events as $event_name)
{
  $$event_name = event_capture($event_name);
}
