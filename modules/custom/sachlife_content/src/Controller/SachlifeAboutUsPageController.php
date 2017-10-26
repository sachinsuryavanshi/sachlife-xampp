<?php
namespace Drupal\sachlife_content\Controller;
use Drupal\Core\Controller\ControllerBase;


/**
 * Class SachlifeAboutUsPageController
 * @package Drupal\sachlife_content\Controller
 */

class SachlifeAboutUsPageController extends ControllerBase
{
    /**
     * @return array
     */

    public function aboutus(){
      $query = \Drupal::database()->select('node_field_data', 'nfd');
      $query->fields('nfd', ['nid', 'title']);
      $query->addField('nd','body_value');
      $query->addField('nfs','field_story_background_image_target_id');
      $query->addField('fm','uri');
      $query->join('node__body', 'nd', 'nfd.nid = nd.entity_id');
      $query->join('node__field_story_background_image','nfs','nfd.nid = nfs.entity_id');
      $query->leftJoin('file_managed', 'fm', 'nfs.field_story_background_image_target_id = fm.fid');
      $query->condition('nfd.type','our_story','IN');
      $query->range(0,1);
      $contentData = $query->execute()->fetchAllAssoc('nid');
        foreach ($contentData as $key => $value){
          $content[$key]['title'] = $value->title;
          $content[$key]['description'] = $value->body_value;
          $content[$key]['backgroundImage'] = $value->uri;
          $queryTeam = \Drupal::database()->select('node__field_team_member_information', 'tmi');
          $queryTeam->fields('tmi',['field_team_member_information_target_id', 'entity_id']);
          $queryTeam->addField('fun','field_user_name_value');
          $queryTeam->addField('fup','field_user_profile_image_target_id');
          $queryTeam->addField('fsm','field_social_media_information_target_id');
          $queryTeam->addField('fm','uri');
          $queryTeam->join('paragraph__field_social_media_information', 'fsm', 'tmi.field_team_member_information_target_id = fsm.entity_id');
          $queryTeam->join('paragraph__field_user_name', 'fun', 'tmi.field_team_member_information_target_id = fun.entity_id');
          $queryTeam->join('paragraph__field_user_profile_image', 'fup', 'tmi.field_team_member_information_target_id = fup.entity_id');
          $queryTeam->leftJoin('file_managed', 'fm', 'fup.field_user_profile_image_target_id = fm.fid');
          $queryTeam->condition('tmi.entity_id', $key);
          $contentTeam = $queryTeam->execute()->fetchAllAssoc('field_team_member_information_target_id');
          foreach ($contentTeam as $keyTeam => $valueTeam){
            $content[$key]['users'][$keyTeam]['username']= $valueTeam->field_user_name_value;
            $content[$key]['users'][$keyTeam]['uri']= $valueTeam->uri;
            $querySocial = \Drupal::database()->select('paragraph__field_social_media_information', 'fsm');
            $querySocial->fields('fsm',['field_social_media_information_target_id']);
            $querySocial->addField('fsl','field_social_link_class_value');
            $querySocial->addField('fst','field_social_url_title_value');
            $querySocial->addField('pfs', 'field_social_url_uri');
            $querySocial->join('paragraph__field_social_url_title', 'fst', 'fsm.field_social_media_information_target_id = fst.entity_id');
            $querySocial->join('paragraph__field_social_link_class', 'fsl', 'fsm.field_social_media_information_target_id = fsl.entity_id');
            $querySocial->join('paragraph__field_social_url', 'pfs', 'fsm.field_social_media_information_target_id = pfs.entity_id');
            $querySocial->condition('fsm.entity_id', $keyTeam);
            $contentSocial = $querySocial->execute()->fetchAllAssoc('field_social_media_information_target_id');
            foreach ($contentSocial as $keySocial => $valueSocial){
              $content[$key]['users'][$keyTeam]['social'][$keySocial]['title']= $valueSocial->field_social_url_title_value;
              $content[$key]['users'][$keyTeam]['social'][$keySocial]['linkClass']= $valueSocial->field_social_link_class_value;
              $content[$key]['users'][$keyTeam]['social'][$keySocial]['link']= $valueSocial->field_social_url_uri;
            }
          }
        }
         /**
         *
         */
        $build = [];
        $build['ourstory'] = [
            '#theme' => 'ourstory',
            '#content'=> $content,
        ];
        return $build;
    }
}
