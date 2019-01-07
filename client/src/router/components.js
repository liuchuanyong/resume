//主的组件
const components = {
    // "/resume/index": import("@view/resume/Index"),
    // "/user/index": import("@view/user/Index"),
    // "/user/role": import("@view/role/Index"),
    // "/user/permission": import("@view/permission/Index"),
    // "/report/personal_recruitment": import("@view/report/PersonalRecruitment")

    // "/resume/index": resolve =>
    //     require.ensure([], () => resolve(require("@view/resume/Index"))),
    // "/user/index": resolve =>
    //     require.ensure([], () => resolve(require("@view/user/Index"))),
    // "/user/role": resolve =>
    //     require.ensure([], () => resolve(require("@view/role/Index"))),
    // "/user/permission": resolve =>
    //     require.ensure([], () => resolve(require("@view/permission/Index"))),
    // "/report/personal_recruitment": resolve =>
    //     require.ensure([], () =>
    //         resolve(require("@view/report/PersonalRecruitment"))
    //     )

    "/resume/Index": resolve =>
        require.ensure([], () => resolve(require("@view/resume/Index"))),
    "/user/Index": resolve =>
        require.ensure([], () => resolve(require("@view/user/Index"))),
    "/role/Index": resolve =>
        require.ensure([], () => resolve(require("@view/role/Index"))),
    "/permission/Index": resolve =>
        require.ensure([], () => resolve(require("@view/permission/Index"))),
    "/report/personal_recruitment/Index": resolve =>
        require.ensure([], () =>
            resolve(require("@view/report/personal_recruitment/Index"))
        )
};

export default components;
