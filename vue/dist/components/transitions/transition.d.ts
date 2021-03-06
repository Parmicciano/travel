import { Ref } from 'vue';
declare enum TreeStates {
    Visible = "visible",
    Hidden = "hidden"
}
export declare let TransitionChild: import("vue").DefineComponent<{
    as: {
        type: (ObjectConstructor | StringConstructor)[];
        default: string;
    };
    show: {
        type: BooleanConstructor[];
        default: null;
    };
    unmount: {
        type: BooleanConstructor[];
        default: boolean;
    };
    appear: {
        type: BooleanConstructor[];
        default: boolean;
    };
    enter: {
        type: StringConstructor[];
        default: string;
    };
    enterFrom: {
        type: StringConstructor[];
        default: string;
    };
    enterTo: {
        type: StringConstructor[];
        default: string;
    };
    leave: {
        type: StringConstructor[];
        default: string;
    };
    leaveFrom: {
        type: StringConstructor[];
        default: string;
    };
    leaveTo: {
        type: StringConstructor[];
        default: string;
    };
}, {
    el: Ref<HTMLElement | null>;
    state: Ref<TreeStates>;
}, unknown, {}, {}, import("vue").ComponentOptionsMixin, import("vue").ComponentOptionsMixin, ("beforeEnter" | "afterEnter" | "beforeLeave" | "afterLeave")[], "beforeEnter" | "afterEnter" | "beforeLeave" | "afterLeave", import("vue").VNodeProps & import("vue").AllowedComponentProps & import("vue").ComponentCustomProps, Readonly<{
    as: string;
    show: boolean;
    unmount: boolean;
    appear: boolean;
    enter: string;
    enterFrom: string;
    enterTo: string;
    leave: string;
    leaveFrom: string;
    leaveTo: string;
} & {}>, {
    as: string;
    show: boolean;
    unmount: boolean;
    appear: boolean;
    enter: string;
    enterFrom: string;
    enterTo: string;
    leave: string;
    leaveFrom: string;
    leaveTo: string;
}>;
export declare let TransitionRoot: import("vue").DefineComponent<{
    as: {
        type: (ObjectConstructor | StringConstructor)[];
        default: string;
    };
    show: {
        type: BooleanConstructor[];
        default: null;
    };
    unmount: {
        type: BooleanConstructor[];
        default: boolean;
    };
    appear: {
        type: BooleanConstructor[];
        default: boolean;
    };
    enter: {
        type: StringConstructor[];
        default: string;
    };
    enterFrom: {
        type: StringConstructor[];
        default: string;
    };
    enterTo: {
        type: StringConstructor[];
        default: string;
    };
    leave: {
        type: StringConstructor[];
        default: string;
    };
    leaveFrom: {
        type: StringConstructor[];
        default: string;
    };
    leaveTo: {
        type: StringConstructor[];
        default: string;
    };
}, {
    state: Ref<TreeStates>;
}, unknown, {}, {}, import("vue").ComponentOptionsMixin, import("vue").ComponentOptionsMixin, ("beforeEnter" | "afterEnter" | "beforeLeave" | "afterLeave")[], "beforeEnter" | "afterEnter" | "beforeLeave" | "afterLeave", import("vue").VNodeProps & import("vue").AllowedComponentProps & import("vue").ComponentCustomProps, Readonly<{
    as: string;
    show: boolean;
    unmount: boolean;
    appear: boolean;
    enter: string;
    enterFrom: string;
    enterTo: string;
    leave: string;
    leaveFrom: string;
    leaveTo: string;
} & {}>, {
    as: string;
    show: boolean;
    unmount: boolean;
    appear: boolean;
    enter: string;
    enterFrom: string;
    enterTo: string;
    leave: string;
    leaveFrom: string;
    leaveTo: string;
}>;
export {};
