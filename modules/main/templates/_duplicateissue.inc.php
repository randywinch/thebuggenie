<?php
						$duplicate_issue = TBGFactory::TBGIssueLab($issue_id);
						echo '<li>'.link_tag(make_url('viewissue', array('issue_no' => $duplicate_issue->getIssueNo(), 'project_key' => $duplicate_issue->getProject()->getKey())), ($duplicate_issue->getIssueType()->isTask() ? $duplicate_issue->getTitle() : $duplicate_issue->getFormattedTitle())).'</li>';
?>