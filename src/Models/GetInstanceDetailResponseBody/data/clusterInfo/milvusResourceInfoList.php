<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Milvus\V20231012\Models\GetInstanceDetailResponseBody\data\clusterInfo;

use AlibabaCloud\Tea\Model;

class milvusResourceInfoList extends Model
{
    /**
     * @example QueryNode
     *
     * @var string
     */
    public $componentType;

    /**
     * @example 8
     *
     * @var int
     */
    public $cuNum;

    /**
     * @var int
     */
    public $cuRatio;

    /**
     * @example 100
     *
     * @var int
     */
    public $diskSize;

    /**
     * @example essd
     *
     * @var string
     */
    public $diskType;

    /**
     * @example 2
     *
     * @var int
     */
    public $replica;
    protected $_name = [
        'componentType' => 'ComponentType',
        'cuNum' => 'CuNum',
        'cuRatio' => 'CuRatio',
        'diskSize' => 'DiskSize',
        'diskType' => 'DiskType',
        'replica' => 'Replica',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->componentType) {
            $res['ComponentType'] = $this->componentType;
        }
        if (null !== $this->cuNum) {
            $res['CuNum'] = $this->cuNum;
        }
        if (null !== $this->cuRatio) {
            $res['CuRatio'] = $this->cuRatio;
        }
        if (null !== $this->diskSize) {
            $res['DiskSize'] = $this->diskSize;
        }
        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }
        if (null !== $this->replica) {
            $res['Replica'] = $this->replica;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return milvusResourceInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComponentType'])) {
            $model->componentType = $map['ComponentType'];
        }
        if (isset($map['CuNum'])) {
            $model->cuNum = $map['CuNum'];
        }
        if (isset($map['CuRatio'])) {
            $model->cuRatio = $map['CuRatio'];
        }
        if (isset($map['DiskSize'])) {
            $model->diskSize = $map['DiskSize'];
        }
        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }
        if (isset($map['Replica'])) {
            $model->replica = $map['Replica'];
        }

        return $model;
    }
}
