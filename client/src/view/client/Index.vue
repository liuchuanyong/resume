<template>
    <div>
        <el-row class="table-container">
            <div class="action-bar">
                <div class="search-item">
                    <el-button
                        type="primary"
                        @click="addDialog = true"
                        :disabled="!$check_pm('client_add')"
                    >新增</el-button>
                </div>
                <div class="action-bar-right">
                    <div class="search-item">
                        <el-input
                            type="text"
                            class="search-input"
                            v-model.trim="search.name"
                            autocomplete="off"
                            placeholder="请输入客户名称"
                            @keyup.enter="getData(true)"
                        ></el-input>
                        <el-button
                            type="primary"
                            circle
                            icon="el-icon-search"
                            @click="getData(true)"
                            :loading="tableLoading"
                        ></el-button>
                    </div>
                </div>
            </div>

            <el-table
                border
                stripe
                :data="tdata"
                style="width: 100%"
                :height="tabelHeight"
                v-loading="tableLoading"
            >
                <el-table-column
                    prop="client_name"
                    label="客户名称"
                ></el-table-column>

                <el-table-column
                    prop="ct_time"
                    label="创建时间"
                ></el-table-column>

                <el-table-column
                    fixed="right"
                    label="状态"
                    align="center"
                    width="60"
                >
                    <template slot-scope="scope">
                        <i
                            v-if="scope.row.status == 0"
                            class="fa fa-check right status-icon"
                            @click="$check_pm('client_change_status') && changeStatus(scope.row.id, 1, scope.row)"
                            :class="{'permission-forbid': !$check_pm('client_change_status')}"
                        ></i>
                        <i
                            v-if="scope.row.status == 1"
                            class="fa fa-ban ban status-icon"
                            @click="$check_pm('client_change_status') && changeStatus(scope.row.id, 0, scope.row)"
                            :class="{'permission-forbid': !$check_pm('client_change_status')}"
                        ></i>
                    </template>
                </el-table-column>

                <el-table-column
                    fixed="right"
                    label="操作"
                    align="center"
                    width="180"
                >
                    <template slot-scope="scope">
                        <el-tooltip
                            effect="dark"
                            content="修改"
                            placement="top"
                        >
                            <el-button
                                type="primary"
                                size="mini"
                                icon="el-icon-edit"
                                circle
                                @click="showEditDialog(scope.row)"
                                :disabled="!$check_pm('client_edit')"
                            ></el-button>
                        </el-tooltip>
                        <el-tooltip
                            effect="dark"
                            content="删除"
                            placement="bottom"
                        >
                            <el-button
                                type="danger"
                                size="mini"
                                icon="el-icon-delete"
                                circle
                                @click="del(scope.row, scope.$index)"
                                :disabled="!$check_pm('client_del')"
                            ></el-button>
                        </el-tooltip>
                    </template>
                </el-table-column>
            </el-table>
        </el-row>

        <el-row
            class="pager"
            type="flex"
            justify="end"
        >
                <el-pagination
                    @current-change="changePage"
                    @size-change="pageSizeChange"
                    background
                    layout="total, sizes, prev, pager, next, jumper"
                    :page-sizes="[10, 20, 50, 100]"
                    :page-size="pager.size"
                    :total="pager.total"
                    :current-page="pager.current"
                ></el-pagination>
        </el-row>

        <add
            :show.sync="addDialog"
            @add-item="addItem"
        ></add>

        <edit
            :show.sync="editDialog"
            :edit-item="currentEditItem"
            @edit-item="editItem"
        ></edit>

    </div>
</template>

<script>
import TableBase from "@view/base/TableBase";

import Add from "./Add";
import Edit from "./Edit";
export default {
    mixins: [TableBase],

    components: {
        Add,
        Edit,
    },

    data() {
        return {
            //填写API获取的类型，由父类自动调用，不填不调用
            apiType: "client",

            tdata: [
                // {
                //     id: 1,
                //     client_name: "123",
                //     status: 0,
                //     ct_user: "创建人",
                //     ct_time: "创建时间",
                //     mfy_user: "修改人",
                //     mfy_time: "修改时间"
                // },
                //  {
                //     id: 1,
                //     client_name: "123",
                //     status: 1,
                //     ct_user: "创建人",
                //     ct_time: "创建时间",
                //     mfy_user: "修改人",
                //     mfy_time: "修改时间"
                // },
            ],

            //搜索条件
            search: {
                name: ""
            }
        };
    },

    methods: {
        changeStatus(id, status, item) {
            let that = this;

            that.$api.client
                .changeStatus({
                    id,
                    status
                })
                .then(res => {
                    if (res.code == 0) {
                        that.$message({
                            message: "更新状态成功.",
                            type: "success",
                            duration: 800
                        });

                        item.status = status;
                    } else {
                        that.$message.error(res.msg || "更新状态失败，请重试.");
                    }
                })
                .catch(res => {
                    that.$message.error("更新状态失败，请重试.");
                });
        }
    }
};
</script>
<style lang="less" scoped>
.right {
    color: #00c100;
}

.ban {
    color: #f56c6c;
}

.status-icon {
    cursor: pointer;
}
</style>