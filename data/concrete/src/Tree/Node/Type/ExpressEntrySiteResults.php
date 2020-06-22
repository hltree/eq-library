<?php
namespace Concrete\Core\Tree\Node\Type;

use Concrete\Core\Database\Connection\Connection;
use Concrete\Core\Entity\Site\Site;
use Concrete\Core\Tree\Node\Node as TreeNode;
use Concrete\Core\Tree\Node\Type\Formatter\ExpressEntryResultsListFormatter;
use Concrete\Core\Tree\Node\Type\Menu\ExpressEntryResultsFolderMenu;
use Loader;

class ExpressEntrySiteResults extends ExpressEntryResults
{

    /**
     * @var int
     */
    protected $siteID = null;

    public function loadDetails()
    {
        $db = app(Connection::class);
        $row = $db->fetchAssoc('SELECT * FROM TreeExpressEntrySiteResultNodes WHERE treeNodeID = ?', [
            $this->treeNodeID,
        ]);
        if (!empty($row)) {
            $this->siteID = $row['siteID'];
        }
    }

    public static function add($treeNodeCategoryName = '', $parent = false, Site $site = null)
    {
        $node = parent::add($treeNodeCategoryName, $parent);
        if ($site) {
            $node->setTreeNodeSite($site);
        }
        return $node;
    }

    public function setTreeNodeSite(Site $site)
    {
        $db = app(Connection::class);
        $db->replace('TreeExpressEntrySiteResultNodes', [
            'treeNodeID' => $this->getTreeNodeID(),
            'siteID' => $site->getSiteID(),
        ], ['treeNodeID'], true);
        $this->siteID = $site->getSiteID();
    }




}
